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

Route::get('/','Main@index')->name('mainIndex');
Route::group(['middleware' => ['web']], function(){
    /** Show profile */
    Route::get('/profile','Profile@show')->name('profile');

    Route::get('/profile/edit','Profile@edit')->name('editProfile');

    /** Edit profile datas */
    Route::post('/profile/edit/action','Profile@editAction')->name('editProfileAction');

    /** Show bought card */
    Route::get('/profile/kupione','Profile@bought')->name('boughtProfile');

    Route::get('/profile/wystawione','Profile@onSell')->name('onSell');

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

    Route::get('/koszyk','Basket@show')->name('basketShow');

    Route::get('/deleteBasket/{id}','Basket@delete')->name('deleteFromBasket');

    Route::get('/category/{slug}','Categories@show')->name('showCategory');

    Route::get('categories','Categories@whole')->name('showCategories');

    Route::resource('admin','admin');

    Route::get('/admin/{id}/edit','Admin@edit')->name('adminEditProduct');

    Route::post('/admin/update/{id}','Admin@updateProduct')->name('adminUpdateProduct');

    Route::get('/admin/delete/{photo}/{slug}/{name}','Admin@deletePhoto')->name('adminDeletePhoto');

    Route::get('/admin/delete/{id}','Admin@destroy')->name('adminDeleteProduct');


    Route::match(['post','get'],'/addToBasket','Ajax@addToBasket')->name('addToBasket');

    Route::get('/conversation/{id}/{slug}/{productId}','Profile@conversation')->name('conversation');

    Route::post('/wiadomosc','Profile@sendMessage')->name('messages');

    Route::get('/konwesacje','Profile@showConv')->name('showConv');

    Route::get('/konwersacje/{id}','Profile@loadConv')->name('loadConv');

    Route::get('/admin/categories','AdminPanel@getCategories')->name('categoriesAdmin');

    Route::post('/admin/categories/{id}/edit')->name('editCategory');

    Route::post('/admin/categories/{id}/destroy')->name('destroyCategory');

    Route::get('/show/{id}/edit','Profile@editProduct')->name('userEditProduct');

    Route::get('/show/{id}/destroy','Profile@destroyProduct')->name('userDestroyProduct');

    Route::post('update','Profile@editProductAction')->name('updateUserProduct');

    Route::get('/logout','Profile@logout')->name('logout');

    Route::get('/search','Product@search')->name('search');

    Route::post('/profile/switch','Ajax@switchLocation')->name('switchLocation');

    Route::get('/profile/{id}/show','Profile@getProfile')->name('getProfile');


});

