<?php

use App\Http\Controllers\Basic_crud\UsersController;
use LionRoute\Route;

/**
 * ------------------------------------------------------------------------------
 * Web Routes
 * ------------------------------------------------------------------------------
 * Here is where you can register web routes for your application
 * ------------------------------------------------------------------------------
 **/

Route::get('/', fn() => info("Welcome to the index, access the web: " . env->SERVER_URL_AUD));

Route::prefix('api', function() {
    Route::prefix('users', function() {
        Route::post('create', [UsersController::class, 'createUsers']);
        Route::get('read', [UsersController::class, 'readUsers']);
        Route::get('read/{idusers:i}', [UsersController::class, 'readUsersById']);
        Route::put('update/{idusers:i}', [UsersController::class, 'updateUsers']);
        Route::delete('delete/{idusers:i}', [UsersController::class, 'deleteUsers']);
    });
});
