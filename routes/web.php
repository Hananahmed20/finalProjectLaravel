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

Route::get('/', function () {
    return view('welcome');
}); 

//for admin
Route::get('fruit/create', 'FruitController@create');
Route::post('fruit/store','FruitController@store');
Route::get('fruit/show','FruitController@index')->name('fruits.index');
Route::get('fruit/showall','FruitController@showallfruits');
Route::get('fruit/view/{id}','FruitController@view');
Route::get('fruit/edit/{id}', 'FruitController@edit');
Route::post('fruit/update', 'FruitController@update');
Route::get('fruit/delete/{id}','FruitController@destroy');

//for login admin to dashboard and other to public website
Route::get('/admin', function(){
    return view('Admin.create');
});

// Route::get('/admin','show@adminHome');
Route::group(['middleware' => ['auth','admin']],function(){
    Route::get('/home', function(){
        return view('Admin.create');
    });
});

//route for public website
Route::get('/', 'Show@index')->name('main');
// Route::get('/show','UserFruitController@show');
// Route::get('index', 'Show@index');
Route::get('about', 'Show@about');
Route::get('contact', 'Show@contact');
Route::get('testimonial', 'Show@testimonial');
Route::get('fruit', 'Show@fruit');
Route::post('/search','FruitController@search');

//for contact 
Route::post('contact/user','ContactController@store');
Route::get('contact/show','ContactController@show');

//for testimonial 
Route::get('testimonial/create','testimonialController@create');
Route::post('testimonial/store','testimonialController@store');
Route::get('testimonial/show','testimonialController@index');


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
