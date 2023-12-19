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
Route::get('sign_out', [AuthorizationController::class, 'sign_out']);
Route::get('/', [MainController::class, 'country']);



Route::get('personal-data', function () {
    return view('personal-data');
});
Route::get('personal-booking', function () {
    return view('personal-booking');
});
Route::get('personal-objects', [MainController::class, 'personal_objects']);
Route::get('personal-objects/{id}/redact-card', [MainController::class, 'edit_hotel_card']);
Route::delete('/{id}/delete_object', [MainController::class, 'delete_hotel_card'])->name('delete_object');
Route::delete('/{id}/delete', [MainController::class, 'delete_account'])->name('delete_account');
Route::get('/personal-security/{id}', [MainController::class, 'edit_user']);
Route::post('/personal-security/{id}/passsword_edit', [MainController::class, 'passsword_edit'])->name('passsword_edit');


Route::group(['namespace' => 'Admin', 'middleware' => 'admin'], function () {

    Route::get('/admin/index', [MainController::class, 'moderators']);

    Route::delete('/admin/index/{id}/delete', [MainController::class, 'delete'])->name('delete_moder');

    Route::get('admin/moderator-create', function () {
        return view('admin.moderator-create');
    });

    Route::post('/add_moderator', [AuthorizationController::class, 'add_moderator']);

    Route::get('admin/index/{id}/moderator-edit', [MainController::class, 'edit_moderator']);
    Route::post('admin/index/{id}/edit_moderator_valid', [MainController::class, 'edit_moderator_valid'])->name('edit_moderator_validate');
});

Route::group(['namespace' => 'Moderator', 'middleware' => 'moderator'], function () {

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

Route::get('index/{id}/hotelcard', [MainController::class, 'hotel_card'])->name('hotelcard');

Route::get('catalog', [MainController::class, 'catalog']);

Route::get('create-card', [MainController::class, 'create_card']);

Route::post('create_card_valid', [MainController::class, 'create_card_valid']);

Route::patch('/editCards/{id}', [MainController::class, 'edit_hotel_card_validate']);

Route::get('redact-card', function () {
    return view('redact-card');
});
