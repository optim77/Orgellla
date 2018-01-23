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

Route::get('/','Main@index');
Route::group(['middleware' => ['web']], function(){
    /** Show profile */
    Route::get('/profile','Profile@show')->name('profile');

    Route::get('/profile/edit','Profile@edit')->name('editProfile');

    /** Edit profile datas */
    Route::post('/profile/edit/action','Profile@editAction')->name('editProfileAction');

    /** Show bought card */
    Route::get('/profile/kupione','Profile@bought')->name('boughtProfile');

    /** Show create product form */
    Route::get('/create','Profile@create')->name('create');

    Route::post('/create/action','Profile@createAction')->name('createAction');


    //Route::get('/create','Add@create')->name('createProduct');
    Route::resource('app','Main');
    Auth::routes();


});

