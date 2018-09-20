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


Route::get('/blog/category/{slug?}' , 'BlogController@category')->name('category');
Route::get('/blog/article/{slug?}' , 'BlogController@article')->name('article');

Route::group(['prefix' => 'admin' , 'namespace' => 'Admin' , 'middleware' => ['auth']] , function(){
    Route::get('/' , 'DashboardController@dashboard')->name('admin.index');
    Route::resource('/category' , 'CategoryController' , ['as'=>'admin']);
    Route::resource('/article' , 'ArticleController' , ['as'=>'admin']);
    Route::group(['prefix' => 'user_management' , 'namespace' => 'UserManagement'] , function(){
        Route::resource('/user' , 'UserController' , ['as' => 'admin.user_management']);
    });
});

Route::get('/', function () {
    return view('blog.home');
});
Route::get('/start',  'StartController@index');
Route::get('/start/get-json',  'StartController@getJson');
Route::get('/start/data-chart',  'StartController@chartData');
Route::get('/start/random-chart',  'StartController@chartRandom');
Route::get('/start/socket-chart',  'StartController@newEvent');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
