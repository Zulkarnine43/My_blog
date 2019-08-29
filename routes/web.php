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

//Route::get('/w', function () {
//    return view('admin.welcome');
//});
Route::get('/',[
	'uses' => 'my_blogController@indexx',
	'as' => 'i'
]);

Route::get('/products',[
'uses' =>'my_blogController@products',
'as'  => 'p'

]);

Route::get('/registers',[
'uses' =>'my_blogController@register',
'as' => 're'

]);

Route::post('/save',[
    'uses' =>'my_blogController@saveInfo',
    'as' => 'sr'
]);


Route::post('/edit/(id)',[
    'uses' =>'my_blogController@editInfo',
    'as' => 'editCategory'
]);



Route::post('/update',[
    'uses' =>'my_blogController@updateInfo',
    'as' => 'up'
]);

Route::post('/delete/(id)',[
    'uses' =>'my_blogController@deleteInfo',
    'as' => 'deleteCategory'
]);




//Route::post('/unpulished/(id)',[
   // 'uses' =>'my_blogController@saveInfo',
   // 'as' => 'sr'
//]);



Route::post('/manage',[
    'uses' =>'my_blogController@manageInfo',
    'as' => 'ma'
]);


Route::get('/signin',[
'uses' =>'my_blogController@logs',
'as' => 'lo'

]);
   


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
