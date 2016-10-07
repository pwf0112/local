<?php
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('cash/add', function () {
	return view('vendor.cash.add');
})->name('cash.add');

Route::get('cash/add/data', 'Cash\Data@handle');

Route::get('json', 'Cash\Data@handle');

Route::post('post01', function (Request $request) {
	\Log::alert($request->input());
	return [];
});
