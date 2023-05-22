<?php

namespace App\Http\Controllers;

use Validator;
use Carbon\Carbon;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class login extends Controller
{
    public function loginSystem(Request $request){
        $current_date_time = Carbon::now()->toDateTimeString();   
        $validator = Validator::make($request->all(),[
            'username'=>'required|max:50',
            'password'=>'required|max:500',
        ]);

        if(!$validator->passes()){
            return response()->json(['status'=>201, 'error'=>$validator->errors()->toArray()]);
        }else{
            $userinfo = User::where('email','=',$request->username) 
            ->first();
            if(!$userinfo){
                return response()->json(['status'=>202,'msg'=>'Sorry We do not recognize your email!']);
            }else{
                if (Hash::check($request->password,$userinfo->password)){
                    $request->session()->put('LoggedUserID', $userinfo->id);
                   
                    return response()->json(['status'=>200]);
                }else{
                    return response()->json(['status'=>202,"msg"=>'Incorect Username or Password!']);
                }
            }            
        }
    }

    function logoutSystem(Request $request){

        if(session()->has('LoggedUserID')){
           session()->pull('LoggedUserID');
           return redirect('login');
        }
    }    
}
