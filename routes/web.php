<?php

use App\Http\Controllers\Backend\Blog\BlogsController;
use App\Http\Controllers\Backend\CountryItineraries\CountryItinerariesController;
use App\Http\Controllers\Backend\WorldDestinations\WorldDestinationsController;
use App\Http\Controllers\Frontend\DestinationsController;
use App\Http\Controllers\LanguageController;

/*
 * Global Routes
 * Routes that are used between both frontend and backend.
 */

// Switch between the included languages
Route::get('lang/{lang}', [LanguageController::class, 'swap']);

/*
 * Frontend Routes
 * Namespaces indicate folder structure
 */
Route::group(['namespace' => 'Frontend', 'as' => 'frontend.'], function () {
    include_route_files(__DIR__ . '/frontend/');
});

/*
 * Backend Routes
 * Namespaces indicate folder structure
 */
Route::group(['namespace' => 'Backend', 'prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'admin'], function () {
    /*
     * These routes need view-backend permission
     * (good if you want to allow more than one group in the backend,
     * then limit the backend features by different roles or permissions)
     *
     * Note: Administrator has all permissions so you do not have to specify the administrator role everywhere.
     * These routes can not be hit if the password is expired
     */
    include_route_files(__DIR__ . '/backend/');
});

Route::group(['prefix' => 'worlddestinations', 'middleware' => 'admin'], function () {
    Route::get('/', [WorldDestinationsController::class, 'index'])->name('worlddestinations.index');
    Route::get('create', [WorldDestinationsController::class, 'create'])->name('worlddestinations.create');
    Route::post('store', [WorldDestinationsController::class, 'store'])->name('worlddestinations.store');
    Route::get('show/{id}', [WorldDestinationsController::class, 'show'])->name('worlddestinations.show');
    Route::get('edit/{id}', [WorldDestinationsController::class, 'edit'])->name('worlddestinations.edit');
    Route::put('update/{id}', [WorldDestinationsController::class, 'update'])->name('worlddestinations.update');
    Route::get('destroy/{id}', [WorldDestinationsController::class, 'destroy'])->name('worlddestinations.destroy');
    Route::get('list/worlddestinations', [WorldDestinationsController::class, 'listWorldDestinations'])->name('list.worlddestinations');

    Route::group(['prefix' => 'countryitineraries', 'middleware' => 'admin'], function () {
        Route::get('/', [CountryItinerariesController::class, 'index'])->name('countryitineraries.index');
        Route::get('create', [CountryItinerariesController::class, 'create'])->name('countryitineraries.create');
        Route::post('store', [CountryItinerariesController::class, 'store'])->name('countryitineraries.store');
        Route::get('show/{id}', [CountryItinerariesController::class, 'show'])->name('countryitineraries.show');
        Route::get('edit/{id}', [CountryItinerariesController::class, 'edit'])->name('countryitineraries.edit');
        Route::put('update/{id}', [CountryItinerariesController::class, 'update'])->name('countryitineraries.update');
        Route::get('destroy/{id}', [CountryItinerariesController::class, 'destroy'])->name('countryitineraries.destroy');
        Route::get('list/countryitineraries', [CountryItinerariesController::class, 'listCountryItineraries'])->name('list.countryitineraries');
    });


    Route::group(['prefix' => 'blog', 'middleware' => 'admin'], function () {
        Route::get('/', [BlogsController::class, 'index'])->name('blog.index');
        Route::get('create', [BlogsController::class, 'create'])->name('blog.create');
        Route::post('store', [BlogsController::class, 'store'])->name('blog.store');
        Route::get('show/{id}', [BlogsController::class, 'show'])->name('blog.show');
        Route::get('edit/{id}', [BlogsController::class, 'edit'])->name('blog.edit');
        Route::put('update/{id}', [BlogsController::class, 'update'])->name('blog.update');
        Route::get('destroy/{id}', [BlogsController::class, 'destroy'])->name('blog.destroy');
        Route::get('list/blog', [BlogsController::class, 'listBlog'])->name('list.blog');
    });

});
