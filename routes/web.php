<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\FormMailer;

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

/** 
 *  Static pages first.
 */
Route::get('/', function () {
    return view('pages.page_homepage');
});

/**
 * handle contact form
 */
Route::get('/contact', function () {
    return view('pages.page_contact');
});
Route::post('/contact_form', 'FormMailer@contact_form');

/**
 *  Page view routing based on existing slugs
 */
try {
    $pages = App\Page::all();
    foreach ($pages as $page) {
        Route::get($page->slug, 'PageController@show');
    }
} catch (\Exception $exception) {
    // do nothing
}


/**
 *   Admin routes via Voyager.
 */
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
