<?php

namespace App\Http\Controllers;

use Validator;
use App\Models\home;
use Illuminate\Http\Request;


class homeCtrl extends Controller
{
    //home create
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'title'=>'required',
            'paragraph'=>'required',
        ],[
            'title.required'=>"Title is required!",
            'paragraph.required'=>"Paragraph is required!",
        ]);

        $values= [
            'title'=>$request->title,
            'paragraph'=>$request->paragraph,
            // 'status'=>"Active",
        ];
        // dd($values);
        if(!$validator->passes()){
            return response()->json(['status'=>201, 'error'=>$validator->errors()->toArray()]);
        }else{
            $insert = home::create($values);

            if($insert){
                return response()->json(['status'=>200,'msg'=>"Succesfully created!"]);
            }else{
                return response()->json(['status'=>202,'msg'=>"Error saving!"]);

            }
        }
    }
    //loadtable
    public function loadhome(Request $request){
        $getHome = home::latest()->first();
        return response()->json(['status'=>200, 'data'=>$getHome, 'viewTitle'=>$getHome]);
    }


    //getselected data
    public function gethome(Request $request)
    {
        $getGetHome=home::where('id',$request->id)
        ->get();
        return response()->json(['stat'=>200,'data'=>$getGetHome]);
    }


    //update
    public function edit(Request $request){
        $validator = Validator::make($request->all(),[
            'titleU'=>'required',
            'paragraphU'=>'required',
        ],[
            'titleU.required'=>"Title is required!",
            'paragraphU.required'=>"Paragraph is required!",
        ]);

        $value= [
            'title'=>$request->titleU,
            'paragraph'=>$request->paragraphU,
        ];
        // dd($values);
        if(!$validator->passes()){
            return response()->json(['status'=>201, 'error'=>$validator->errors()->toArray()]);
        }else{
            // $insert = home::create($values);
            $query=home::where('id',$request->id)->update($value);

            if($query){
                return response()->json(['status'=>200,'msg'=>"Succesfully updated!"]);
            }else{
                return response()->json(['status'=>202,'msg'=>"Error updating!"]);

            }
        }
    }



}
