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

Route::get('posts/{postCategory?}', 'PostController@index')->name('posts.index');
Route::get('blogs/{post}', 'PostController@show')->name('posts.show');

// Route::get('products', 'ProductController@index')->name('products.index');
// Route::get('products/{product}', 'ProductController@show')->name('products.show');

// Route::get('find-a-store', 'StoreController@index')->name('stores.index');

Route::get('volunteer', 'VacancyController@index')->name('vacancy.index');
Route::get('volunteer/{vacancy}', 'VacancyController@show')->name('vacancy.show');
Route::post('volunteer/', 'VacancyController@store')->name('vacancy.store');

Route::get('our-team', 'OurTeamController@index')->name('our-team.index');
Route::get('our-team/{slug}', 'OurTeamController@show')->name('our-team.show');

Route::get('financials-reports', 'ReportController@index')->name('reports.index');
Route::get('contact-us', 'ContactUsController@index')->name('contact-us.index');

// Static Pages
Route::view('core-values', 'frontend.static-page.core-values')->name('static-page.core-values');
Route::view('faq', 'frontend.static-page.faq')->name('static-page.faq');

Route::get('get-involved', 'PageController@getInvolved')->name('get-involved');
Route::get('get-involved/donation', 'PageController@donation')->name('get-involved.donation');
Route::view('get-involved/donation/leave-a-will-for-dhana-yoga-foundation', 'frontend.page.leave-a-will')->name('get-involved.donation.leave-a-will');
Route::get('{page}', 'PageController@show')->name('frontend.pages.show');
