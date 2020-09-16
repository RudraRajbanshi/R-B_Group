<?php

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
    return redirect('/login');
});

//user
Route::get('/index', 'IndexController@index')->name('index');
Route::get('/about', 'IndexController@about');
Route::get('/services', 'IndexController@services');
Route::get('/blog', 'IndexController@blog');
Route::get('/contact', 'IndexController@contact');
Route::get('/aboutjob', 'IndexController@aboutjob');

Route::get('/applyjob', 'IndexController@applyjob');
Route::post('/applyjob','IndexController@store');

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/question','QuestionController@index');
Route::post('/question','QuestionController@store');

Route::post('/contact','ContactController@store');


//admin
Route::get('/admin/index', 'AdminController@index')->middleware('auth');

Route::get('/applicant/details', 'AdminController@applicant_details')->middleware('auth');
Route::delete('/delete_applicant', 'AdminController@applicant_delete')->middleware('auth');
Route::get('/full_details/{id}', 'AdminController@full_details')->middleware('auth');
Route::get('/answers', 'AdminController@answers')->middleware('auth');
Route::get('/view_cover_letter/{id}', 'AdminController@view_cover_letter')->middleware('auth');
Route::get('/view_resume/{id}', 'AdminController@view_resume')->middleware('auth');


Route::get('/message', 'AdminController@message')->middleware('auth');
Route::get('/view_message/{id}', 'AdminController@view_message')->middleware('auth');
Route::delete('/admin/delete_message', 'AdminController@delete_message')->middleware('auth');

Route::get('/change_password', 'AdminController@change_password')->middleware('auth');
Route::post('/change_password', 'AdminController@password_change')->middleware('auth');
