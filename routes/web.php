<?php

use App\User;
use Illuminate\Support\Facades\Auth;
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
Route::get('about', function () {
    return view('About');
});
Route::get('contact', function () {
    return view('contact');
});
Route::get('/calendar', function () {
    return view('admin.Calendar');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:management-users')->group(function(){
Route::resource('users' , 'UsersController');
});

Route::get('/home', 'HomeController@index')->name('home');
Route::prefix('admin')->middleware('can:management-users')->group(function(){
    Route::resource('/admin/home', 'HomeadminController');
});
Route::namespace('user')->prefix('profil')->name('profil.')->middleware('can:management-users')->group(function(){
    Route::resource('profil' , 'ProfilController');
});
Route::middleware('can:management-users')->group(function(){
    Route::resource('school' , 'SchoolController');
});

Route::namespace('password')->group(function(){
    Route::resource('reset' , 'ResetController');
});

Route::namespace('admin')->prefix('admin')->name('admin.')->middleware('can:management-users')->group(function(){
    Route::resource('filières' , 'FilièresController');
    });
Route::namespace('Front')->group(function(){
    Route::resource('Front' , 'OrientationController');
    });
    Route::namespace('Front')->prefix('profil')->name('profil.')->group(function(){
        Route::resource('Front' , 'profilController');
        });