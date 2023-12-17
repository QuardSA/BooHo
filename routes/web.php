<?php

use App\Http\Controllers\AuthorizationController;
use App\Http\Controllers\MainController;
use Illuminate\Http\Request;
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



Route::get('authorization', [AuthorizationController::class, 'authorization']);
Route::get('registration', [AuthorizationController::class, 'registration']);
Route::post('authorization_validate', [AuthorizationController::class, 'authorization_validate'])->name('authorization_validate');
Route::post('registration_validate', [AuthorizationController::class, 'registration_validate']);
Route::get('sign_out',[AuthorizationController::class, 'sign_out']);
Route::get('/',[MainController::class, 'country']);



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


Route::group(['namespace'=> 'Admin','middleware'=>'admin'], function(){

    Route::get('/admin/index',[MainController::class, 'moderators']);

    Route::delete('/admin/index/{id}/delete', [MainController::class, 'delete'])->name('delete_moder');

    Route::get('admin/moderator-create', function () {
        return view('admin.moderator-create');
    });

    Route::post('/add_moderator', [AuthorizationController::class, 'add_moderator']);

    Route::get('admin/index/{id}/moderator-edit',[MainController::class, 'edit_moderator']);
    Route::post('admin/index/{id}/edit_moderator_valid',[MainController::class, 'edit_moderator_valid'])->name('edit_moderator_validate');

});

Route::group(['namespace'=> 'Moderator','middleware'=>'moderator'], function(){

    Route::get('moderator/ordersAcces', function () {
        return view('moderator.ordersAcces');
    });
    Route::get('moderator/ordersDeny', function () {
        return view('moderator.ordersDeny');
    });
    Route::get('moderator', function () {
        return view('moderator.ordersNew');
    });
});

Route::get('hotelcard', function () {
    return view('hotelcard');
});
Route::get('catalog', function () {
    return view('catalog');
});
Route::get('create-card', [MainController::class, 'create_card']);

Route::post('create-card/add', function (Request $request) {
    dd($request);
});
Route::get('redact-card', function () {
    return view('redact-card');
});
