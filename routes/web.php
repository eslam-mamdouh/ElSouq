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

Route::get('/', function () {
    return view('welcome');
});



Route::get('/ajax', function () {
    return response()->json(["msg"=>"done"]);
});

Route::get('/admin', function () {
    return view('admin.admin');
});

Route::get('/orders', function () {
    return view('admin.orders');
});
Route::get('/users', function () {
    return view('admin.users');
});
Route::get('/create-user', function () {
    return view('admin.create-user');
});


Route::get('/t-men', function () {
    return view('pages.t-men');
});

Route::get('/men', function () {
    return view('pages.men');
});

Route::get('/t-women', function () {
    return view('pages.t-women');
});
Route::get('/women', function () {
    return view('pages.women');
});
