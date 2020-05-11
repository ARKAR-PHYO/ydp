<?php

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

Route::get('/','FrontendController@index')->name('index');
Route::get('about','FrontendController@about')->name('frontend.about');
Route::get('contact','FrontendController@contact')->name('frontend.contact');
Route::get('blog','FrontendController@blog')->name('frontend.blog');
Route::get('courses','FrontendController@courses')->name('frontend.courses');

// Route::group(['middleware' => ['role:Admin']], function () {

// });



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('dashboard','BackendController@index')->name('dashboard');
Route::resource('student','StudentController');
Route::resource('batch','BatchController');
Route::resource('file','RequireFileController');
Route::resource('teacher','TeacherController');
Route::resource('course','CourseController');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
