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

/*Route::get('/', function () {
    return view('frontsite.home;
});

localhost/admin/
localhost/dashboard/*/

Route::get('login', 'AuthController@login')->name('login');
Route::post('authenticate', 'AuthController@authenticate')->name('authenticate');
Route::get('logout', 'AuthController@logout')->name('logout');
Route::get('register', 'AuthController@register')->name('register');
Route::post('register', 'AuthController@do_register')->name('do_register');

Route::get('jewlery','jewlerycontroller@querybuilder');
Route::get('orm','jewlerycontroller@orm');
Route::get('relationships','jewlerycontroller@relationships');
Route::get('poly_relationships','jewlerycontroller@poly_relationships');
Route::get('encrypt', 'jewlerycontroller@encrypt');



Route::namespace('Dashboard')->middleware('auth')->name('dashboard.')->prefix('admin')->group(function(){
   Route::get('/', 'DashboardController@index');
   Route::resource('Categorys','CategoryController');
   Route::resource('Products','ProductController');
   Route::resource('Contacts','ContactController');
  Route::resource('users', 'UserController');

});
Route::get('/', 'FrontSiteController@showHome')->name('frontsite.home');
Route::get('/about', 'FrontSiteController@showabout')->name('frontsite.about');
Route::get('/jewellery', 'FrontSiteController@showjewellery')->name('frontsite.jewellery');
Route::get('/shope', 'FrontSiteController@showshope')->name('frontsite.shope');
Route::get('/contact', 'FrontSiteController@showcontact')->name('frontsite.contact');


Route::get('Listjewllery', 'Dashboard\jewelyController@Listjewllery');
Route::get('showjewllery', 'Dashboard\jewelyController@Listjewllery');
Route::get('addjewllery', 'Dashboard\jewelyController@Listjewllery');
Route::get('deletejewllery', 'Dashboard\jewelyController@Listjewllery');
Route::get('editjewllery', 'Dashboard\jewelyController@Listjewllery');
Route::get('savejewllery', 'Dashboard\jewelyController@Listjewllery');
Route::get('saveeditjewllery', 'Dashboard\jewelyController@Listjewllery');

//Route::resource('users','Dashboard\UserController');




/*
Route::get('/',function (){
    return view('frontsite.home');
});
Route::get('about',function (){
    return view('frontsite.about');
});
Route::get('jewellery',function (){
    return view('frontsite.jewellery');
});
Route::get('shope',function (){
    return view('frontsite.shope');
});
Route::get('contact',function (){
    return view('frontsite.contact');
});
*/
