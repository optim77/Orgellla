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

    /** Create new product page*/
    Route::post('/create/action','Profile@createAction')->name('createAction');

    //Route::get('/create','Add@create')->name('createProduct');
    Route::resource('app','Main');
    Auth::routes();

    /**Show once product page*/
    Route::get('/show/{slug}','Product@show')->name('showSlug')->where('slug','[.a-zA-Z0-9]+');

    /**Show category page*/
    Route::get('category/{$category}','Category@show')->name('showCategory');

    Route::match(['post','get'],'/addToBasket','Ajax@addToBasket')->name('addToBasket');
});

