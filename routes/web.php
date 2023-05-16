<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController ;
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

Route::get('/demo', function () {
    return view('demo');
});

Route::get('/', function () {
    return view('index');
});
Route::get('/page_login', function () {
    return view('page_login');
});
Route::post('/loginuser' , [UserController::class , 'login'])->name('login.post');

// the middlware routes w
Route::middleware('UserAuthentication')->group(function(){

    Route::get('/dashboard', function () {
        return view('dashboard');
    });
    Route::get('/analytics', function () {
        return view('analytics');
    });

    Route::get('/blog-single', function () {
        return view('blog-single');
    });
    Route::get('/calendar', function () {
        return view('calendar');
    });
    Route::get('/email_compose', function () {
        return view('email_compose');
    });
    Route::get('/email_detail', function () {
        return view('email_detail');
    });
    Route::get('/email_inbox', function () {
        return view('email_inbox');
    });
    Route::get('/page_register', function () {
        return view('page_register');
    });
    Route::get('/profile', function () {
        return view('profile');
    });
    Route::get('/settings', function () {
        return view('settings');
    });
});
