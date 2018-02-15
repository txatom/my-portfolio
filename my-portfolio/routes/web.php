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




/*
Route::get('/', function () {
    return view('welcome');
});
*/

//Route::get('/' [
//'uses'=>'PortfolioController@index',
//'as'=>'/'
//]);

Route::get('/',[
'uses'=>'PortfolioController@index',
'as'=>'/'
]);

Route::get('/about',[
'uses'=>'PortfolioController@about',
'as'=>'/about'
]);

Route::get('/gallery',[
'uses'=>'PortfolioController@gallery',
'as'=>'/gallery'
]);


Route::get('/portfolio',[
'uses'=>'PortfolioController@portfolio',
'as'=>'/portfolio'
]);

Route::get('/contact',[
'uses'=>'PortfolioController@contact',
'as'=>'/contact'
]);







?>
