<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return '<h1>Welcome George<h1/>';
});


Route::get('/coffee_shop/{category?}/{item?}', function ($category=null, $item=null) {
    if (isset($category)) {
        if (isset($item)) {
            return "<h1>{$item}<h1/>";
        }
    return "<h1>{$category}<h1/>";
        }       

    return '<h1><span style="color: red"> Coffee Shop </span><h1/>';
});



Route::get('/store', function () {
    $filter = request('style');

    if (isset($filter)) {
	return '<h1>This page views <span style="color: red">'. strip_tags($filter).'</span> products<h1/>';}


    return '<h1>This page views <span style="color: red"> all </span> products<h1/>';
});

