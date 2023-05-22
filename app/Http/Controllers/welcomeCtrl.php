<?php

namespace App\Http\Controllers;

use App\Models\home;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class welcomeCtrl extends Controller
{
    //
    public function load_homepage(Request $request){
        $getHome = home::latest()->first();
        return response()->json(['status'=>200, 'data'=>$getHome]);

    }

    public function submitForm(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'text' => 'required',
        ]);

        $payload = [
            'value1' => $validatedData['name'],
            'value2' => $validatedData['email'],
            'value3' => $validatedData['text'],
        ];

        Http::post('https://maker.ifttt.com/trigger/contactus/with/key/bx_yuuaFbrXQ9-_fnTXR3e', $payload);

        return redirect()->back()->with('success', 'Form submitted successfully!');
    }

}
