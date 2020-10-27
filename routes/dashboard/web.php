<?php

/*
|--------------------------------------------------------------------------
| Dashboard Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your dashboard application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

// Routes require authentication and email verification
Route::group(['middleware' => ['auth', 'verified']], function () {

    Route::get('/', 'HomeController@index');

    /**
     * Template routes
     */
    Route::get('/typography', function () {
        return view('pages/typography');
    });

    Route::get('/colors', function () {
        return view('pages/colors');
    });

    Route::get('/alerts', function () {
        return view('pages/alerts');
    });

    Route::get('/buttons', function () {
        return view('pages/buttons');
    });

    Route::get('/cards', function () {
        return view('pages/cards');
    });

    Route::get('/modals', function () {
        return view('pages/modals');
    });

    Route::get('/tooltips-and-popovers', function () {
        return view('pages/tooltips-and-popovers');
    });

    Route::get('/others', function () {
        return view('pages/others');
    });

    Route::get('/forms', function () {
        return view('pages/forms');
    });

    Route::get('/tables', function () {
        return view('pages/tables');
    });

    Route::get('/profile', function () {
        return view('pages/profile');
    });

});

