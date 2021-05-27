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

Route::get('/', 'WelcomeController@index')->name('home');

Auth::routes(['register' => false]);

// Make this route for customers if necessary
// Route::get('/home', 'HomeController@index')->name('home');

Route::get('backend/logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index')->name('backend.logs');

Route::get('blogs', 'PostController@index')->name('posts.index');
Route::get('blogs/{post}', 'PostController@show')->name('posts.show');

// Route::get('products', 'ProductController@index')->name('products.index');
// Route::get('products/{product}', 'ProductController@show')->name('products.show');

// Route::get('find-a-store', 'StoreController@index')->name('stores.index');

Route::get('our-team', 'OurTeamController@index')->name('our-team.index');
Route::get('our-team/{slug}', 'OurTeamController@show')->name('our-team.show');

Route::get('contact-us', 'ContactUsController@index')->name('contact-us.index');

// Static Pages
Route::view('core-values', 'frontend.static-page.core-values')->name('static-page.core-values');

Route::get('{page}', 'PageController@show')->name('frontend.pages.show');
