<?php

use App\Http\Controllers\ItemController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\WelcomeController;
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

Route::get('/', [WelcomeController::class, 'welcome']);
Route::get('/welcome2', [WelcomeController::class, 'welcome2']);
Route::get('/register', [UsersController::class, 'create']);
Route::post('/register', [UsersController::class, 'store']);

Route::get('/items', [ItemController::class, 'all']);
Route::get('/item/create', [ItemController::class, 'create']);
Route::post('/item/create', [ItemController::class, 'store']);



// get(read), posts(create), put(update), delete(delete), patch, head
