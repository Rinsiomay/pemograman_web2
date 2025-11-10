<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'homepage']);

Route::get('/tambah-user', [PageController::class, 'tambahUser']);
Route::post('/tambah-user', [PageController::class, 'storeUser']);

Route::get('/user/{id}/edit', [PageController::class, 'editUser']);
Route::match(['post', 'put', 'patch'], '/user/{id}', [PageController::class, 'updateUser']);

Route::delete('/user/{id}', [PageController::class, 'deleteUser']);
