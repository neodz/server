<?php

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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logoutandredirect', 'RegisterController@logoutandredirect');



// admin space
Route::get('/admin', function () {return view('dashboard.homepage'); });
Route::get('/admin/tourists', 'TouristController@index')->middleware('auth');
Route::delete('/admin/tourist/{id}','TouristController@destroy');
/*Route::ressource('admin');*/
Route::get('/admin/challenges', function () {return view('dashboard.Challenges'); });
Route::get('/admin/places', function () {return view('dashboard.Places'); });
Route::get('/admin/hotels', function () {return view('dashboard.Hotels'); });
Route::get('/admin/restaurents', function () {return view('dashboard.Restaurents'); });
Route::get('/admin/bonuces', function () {return view('dashboard.Bonuces'); });
Route::get('/admin/activities', function () {return view('dashboard.Activities'); });
Route::get('/admin/dadada', function () {return view('dashboard.admin.usersList'); });

