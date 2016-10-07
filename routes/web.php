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

Route::get('cash/add/data', function () {
    $demo = [
        ['id' => 1, 'name' => 'SYS_01'],
        ['id' => 2, 'name' => 'SYS_02'],
        ['id' => 3, 'name' => 'SYS_03'],
        ['id' => 4, 'name' => 'SYS_04'],
    ];

    $lists = [
        'mac' => $demo,
        'pri' => $demo,
        'pos' => $demo,
        'bil' => $demo,
        'sys' => $demo
    ];

    $form = [
        'posi' => '',
        'port' => '',
        'ip' => '',
        'sys' => null,
        'mac' => ['id' => 1, 'code' => 'mac101'],
        'pri' => ['id' => 4, 'code' => ''],
        'bil' => ['id' => 2, 'code' => 'bil201'],
        'pos' => ['id' => 3, 'code' => 'pos403'],
    ];

    $data = [
        'form' => $form,
        'lists' => $lists
    ];

    return $data;
});

Route::get('json', function () {
	return [
		['id' => 1, 'name' => 'POS_HK380_1'],
		['id' => 2, 'name' => 'POS_HK380_2'],
		['id' => 3, 'name' => 'POS_HK380_3'],
		['id' => 4, 'name' => 'POS_HK380_4']
	];
});

Route::post('post01', function (Request $request) {
	\Log::alert($request->input());
	return [];
});
