<?php

namespace App\Http\Controllers;

// use App\Models\User;

use Illuminate\Http\Request;


class pageCtrl extends Controller
{
    //
    public function home()
    {
        return view('home');
    }

    public function aboutUs()
    {
        return view('aboutUs');
    }

    public function career()
    {
        return view('career');
    }

    public function whyUs()
    {
        return view('whyUs');
    }

    public function services()
    {
        return view('services');
    }
}
