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
    return view('index');
});
Route::get('/authorization', function () {
    return view('authorization');
});
Route::get('/registration', function () {
    return view('registration');
});
Route::get('personal-data', function () {
    return view('personal-data');
});
Route::get('personal-booking', function () {
    return view('personal-booking');
});
Route::get('personal-objects', function () {
    return view('personal-objects');
});
Route::get('personal-security', function () {
    return view('personal-security');
});
Route::get('personal-security', function () {
    return view('personal-security');
});
Route::get('admin', function () {
    return view('admin.index');
});
Route::get('admin/moderator-create', function () {
    return view('admin.moderator-create');
});
Route::get('admin/moderator-edit', function () {
    return view('admin.moderator-edit');
});