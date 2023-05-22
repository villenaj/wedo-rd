<?php

namespace App\Http\Controllers;
use Validator;
use App\Models\whyUs;
use Illuminate\Http\Request;

class whyUsCtrl extends Controller
{
    //why us create
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
            $insert = whyUs::create($values);

            if($insert){
                return response()->json(['status'=>200,'msg'=>"Succesfully created!"]);
            }else{
                return response()->json(['status'=>202,'msg'=>"Error saving!"]);

            }
        }
    }
}
