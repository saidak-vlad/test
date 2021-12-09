<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\BlokController;
use App\Http\Controllers\Admin\RecipientController;
use App\Http\Controllers\Admin\TwosectionController;
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
Route::get('/','App\Http\Controllers\HomeController@index');

Route::group(['middleware'	=>	'auth'], function(){
    Route::get('/logout', [AuthController::class, 'logout']);
});

Route::group(['middleware'	=>	'guest'], function(){
    Route::get('/register', [AuthController::class, 'registerForm']);
    Route::post('/register', [AuthController::class, 'register']);
    Route::get('/login', [AuthController::class, 'loginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
});



Route::group([ 'middleware'	=>	'admin'], function(){
    Route::get('/admin','App\Http\Controllers\Admin\DashboardController@index');
    Route::resource('/admin/menu','App\Http\Controllers\Admin\MenuController');
    Route::resource('/admin/users','App\Http\Controllers\Admin\UsersController');
    Route::resource('/admin/headersection','App\Http\Controllers\Admin\HeadersectionController');
    Route::resource('/admin/twosection','App\Http\Controllers\Admin\TwosectionController');
    Route::resource('/admin/blok','App\Http\Controllers\Admin\BlokController');
    Route::resource('/admin/events','App\Http\Controllers\Admin\EventsController');
    Route::resource('/admin/contact','App\Http\Controllers\Admin\ContactController');
    Route::resource('/admin/logotype','App\Http\Controllers\Admin\LogotypeController');
    Route::resource('/admin/recipient','App\Http\Controllers\Admin\RecipientController');
    Route::get('/admin/twosections/{twosection}', [TwosectionController::class, 'toggle']);
    Route::get('/admin/blok/{blok}', [BlokController::class, 'toggle']);
    Route::get('/admin/recipient/{recipient}', [RecipientController::class, 'toggle']);
});

Route::post('/contact_form_process', [Controller::class, 'contactForm'])->name('contact_form_process');
