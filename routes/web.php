<?php

namespace App\Http\Controllers;

use App\Http\Controllers\login;
use App\Http\Controllers\homeCtrl;
use App\Http\Controllers\pageCtrl;
use App\Http\Controllers\careerCtrl;
use App\Http\Controllers\welcomeCtrl;
use App\Http\Controllers\whyUsCtrl;
// use App\Http\Controllers\contactCtrl;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    return view('welcome');
});
Route::get('/login', function () {
    return view('login');
});

// Route::post('/contact/send-email', [contactCtrl::class, 'sendEmail'])->name('contact.sendEmail');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// });
Route::post('/loginSystem',[login::class, 'loginSystem']);

//wedsite
Route::get('/load_homepage',[welcomeCtrl::class, 'load_homepage']);

Route::post('/submit-form', [welcomeCtrl::class, 'submitForm']);

Route::group(['middleware'=>['AuthCheck']], function(){
    Route::get('/dashbaord', function () {
        return view('dashbaord');
    });

    Route::get('/admin', function () {
        return view('app');
    });

    Route::get('/logoutSystem',[login::class, 'logoutSystem']);

    //pages
    Route::get('/home',[pageCtrl::class, 'home']);
    Route::get('/aboutUs',[pageCtrl::class, 'aboutUs']);
    Route::get('/career',[pageCtrl::class, 'career']);
    Route::get('/whyUs',[pageCtrl::class, 'whyUs']);
    Route::get('/services',[pageCtrl::class, 'services']);

    //home
    Route::post('/create', [homeCtrl::class, 'create']);
    Route::get('/loadhome',[homeCtrl::class, 'loadhome']);
    Route::get('/gethome',[homeCtrl::class, 'gethome']);
    Route::post('/edit',[homeCtrl::class, 'edit']);

    //career
    Route::get('/loadcareer',[careerCtrl::class, 'loadcareer']);

    //why us
    Route::post('/whyUs/create', [whyUsCtrl::class, 'create']);
    // Route::get('/loadhome',[homeCtrl::class, 'loadhome']);
    // Route::get('/gethome',[homeCtrl::class, 'gethome']);
    // Route::post('/edit',[homeCtrl::class, 'edit']);






});
