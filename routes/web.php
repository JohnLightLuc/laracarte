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
use App\Mail\ContactMessageCreated;

Route::get('/', 'PagesController@home')->name('home_path');

Route::get('/test-email', function(){
    return new ContactMessageCreated('Abidjan', 'john@gmail.com', 'Mon super message');
});

Route::get('/about', [
    'as' => 'about_path',
    'uses' => 'PagesController@about'
]);

Route::get('/contact', [
    'as' => 'contact.create',
    'uses' => 'MessageController@create'
]);


Route::post('/contact', [
    'as' => 'contact.store',
    'uses' => 'MessageController@store'
]);