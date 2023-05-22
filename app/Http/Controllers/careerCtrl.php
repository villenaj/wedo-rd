<?php

namespace App\Http\Controllers;

use App\Models\appPos;
use App\Models\appJd;
use App\Models\appSkill;
use Illuminate\Http\Request;

class careerCtrl extends Controller
{
    //getselected data
    public function loadcareer(Request $request){
        $getCareer = appPos::join('tbl_position as a','jd.pid', '=', 'a.id')
        ->select("jd.*",'a.*')
        ->get();
        return response()->json(['status'=>200, 'data'=>$getCareer]);
    }



}
