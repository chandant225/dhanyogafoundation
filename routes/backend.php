<?php

use Illuminate\Support\Facades\Route;

Route::name('backend.')->group(function () {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
    
    // Required while adding child support listing
    // Product Categories
    // Route::get('categories', 'CategoryController@index')->name('categories.index');

    // Post Categories
    Route::get('post-categories', 'PostCategoryController@index')->name('post-categories.index');

    Route::get('posts', 'PostController@index')->name('posts.index');
    Route::get('posts/create', 'PostController@create')->name('posts.create');
    Route::post('posts', 'PostController@store')->name('posts.store');
    Route::get('posts/{post}/edit', 'PostController@edit')->name('posts.edit');
    Route::put('posts/{post}', 'PostController@update')->name('posts.update');
    Route::delete('posts/{post}', 'PostController@destroy')->name('posts.destroy');
    Route::patch('posts/{post}/restore', 'PostController@restore')->name('posts.restore');
    Route::delete('posts/{post}/forceDelete', 'PostController@forceDelete')->name('posts.forceDelete');

    // Products link will be required later in the next release
    // Route::get('products', 'ProductController@index')->name('products.index');
    // Route::get('products/create', 'ProductController@create')->name('products.create');
    // Route::post('products', 'ProductController@store')->name('products.store');
    // Route::get('products/{product}/edit', 'ProductController@edit')->name('products.edit');
    // Route::put('products/{product}', 'ProductController@update')->name('products.update');
    // Route::delete('products/{product}', 'ProductController@destroy')->name('products.destroy');
    // Route::patch('products/{product}/restore', 'ProductController@restore')->name('products.restore');
    // Route::delete('products/{product}/forceDelete', 'ProductController@forceDelete')->name('products.forceDelete');

    // pages
    Route::get('pages', 'PageController@index')->name('pages.index');
    Route::get('pages/create-or-edit', 'PageController@createOrEdit')->name('pages.create-or-edit');
    Route::delete('pages/{page}', 'PageController@destroy')->name('pages.destroy');
    Route::patch('pages/{page}/restore', 'PageController@restore')->name('pages.restore');
    Route::delete('pages/{page}/force-delete', 'PageController@forceDelete')->name('pages.force-delete');

    // image sliders
    Route::get('image-sliders', 'ImageSliderController@index')->name('image-sliders.index');
    Route::get('image-sliders/create', 'ImageSliderController@create')->name('image-sliders.create');
    Route::get('image-sliders/{imageSlider}/edit', 'ImageSliderController@edit')->name('image-sliders.edit');
    Route::delete('image-sliders/{imageSlider}', 'ImageSliderController@delete')->name('image-sliders.destroy');

    // Programs
    // Route::get('programs' , 'ProgramController@index')->name('programs.index');
    // Route::get('programs/create' , 'ProgramController@create')->name('programs.create');
    // Route::post('programs' , 'ProgramController@store')->name('programs.store');
    // Route::get('programs/{program}/edit' , 'ProgramController@edit')->name('programs.edit');
    // Route::put('programs/{program}' , 'ProgramController@update')->name('programs.update');
    // Route::delete('programs/{program}' , 'ProgramController@destroy')->name('programs.destroy');

    Route::get('contact-us', 'ContactUsController@index')->name('contact-us.index');
    Route::get('subscribers', 'SubscriberController@index')->name('subscribers.index');
    
    // Do not need store listing for now.
    // Maybe we can convert this to offices listing accross various countries.
    // Route::get('stores', 'StoreController@index')->name('stores.index');
    // Route::get('stores/create', 'StoreController@create')->name('stores.create');
    // Route::post('stores', 'StoreController@store')->name('stores.store');
    // Route::get('stores/{store}/edit', 'StoreController@edit')->name('stores.edit');
    // Route::put('stores/{store}', 'StoreController@update')->name('stores.update');
    // Route::delete('stores/{store}', 'StoreController@destroy')->name('stores.destroy');

    Route::get('departments', 'DepartmentController')->name('departments.index');
    Route::get('our-team', 'OurTeamController@index')->name('our-team.index');
    Route::get('our-team/create', 'OurTeamController@create')->name('our-team.create');
    Route::post('our-team', 'OurTeamController@store')->name('our-team.store');
    Route::get('our-team/{ourTeam}/edit', 'OurTeamController@edit')->name('our-team.edit');
    Route::put('our-team/{ourTeam}', 'OurTeamController@update')->name('our-team.update');

    Route::get('faqs', 'FaqController@index')->name('faqs.index');
    Route::get('faqs/create', 'FaqController@create')->name('faqs.create');
    Route::post('faqs', 'FaqController@store')->name('faqs.store');
    Route::get('faqs/{faq}/edit', 'FaqController@edit')->name('faqs.edit');
    Route::put('faqs/{faq}', 'FaqController@update')->name('faqs.update');
    Route::delete('faqs/{faq}', 'FaqController@destroy')->name('faqs.destroy');

    Route::get('testimonials', 'TestimonialController@index')->name('testimonials.index');

    Route::get('downloads', 'DownloadController@index')->name('downloads.index');
    Route::get('downloads/create', 'DownloadController@create')->name('downloads.create');
    Route::get('downloads/{download}/edit', 'DownloadController@edit')->name('downloads.edit');

    Route::get('vacancy', 'VacancyController@index')->name('vacancy.index');
    Route::get('vacancy/new', 'VacancyController@create')->name('vacancy.create');
    Route::post('vacancy', 'VacancyController@store')->name('vacancy.store');
    Route::get('vacancy/{vacancy}/edit', 'VacancyController@edit')->name('vacancy.edit');
    Route::delete('vacancy/{vacancy}', 'VacancyController@destroy')->name('vacancy.destroy');

    Route::view('volunteer-applications', 'volunteer-application.index')->name('volunteer-applications.index');
    Route::get('volunteer-applications/{volunteerApplication}', 'VolunteerApplicationController@show')->name('volunteer-applications.show');

    Route::group(['namespace' => 'Setting'], function () {
        Route::get('settings/general', 'GeneralSettingController@index')->name('settings.general.index');
        Route::post('settings/general', 'GeneralSettingController@store')->name('settings.general.store');

        Route::get('settings/page', 'PageSettingController@index')->name('settings.page.index');
        Route::post('settings/page', 'PageSettingController@store')->name('settings.page.store');

        Route::get('settings/homepage', 'HomepageSettingController@index')->name('settings.homepage.index');
        Route::post('settings/homepage', 'HomepageSettingController@store')->name('settings.homepage.store');
    });

    Route::get('change-password', 'ChangePasswordController@index')->name('change-password');
});
