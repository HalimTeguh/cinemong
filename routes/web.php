<?php

use App\Http\Controllers\Authorize;
use App\Http\Controllers\Controller;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/signin', [Authorize::class, 'signin']);
Route::post('/signin', [Authorize::class, 'authenticate']);

Route::get('/signup', [Authorize::class, 'signup']);
Route::post('/signup', [Authorize::class, 'createUser']);


Route::get('/dashboard', [Controller::class, 'index']);

Route::get('/dashboard/manageUser', [UserController::class, 'index']);

Route::get('/dashboard/manageMovie', [MovieController::class, 'index']);

Route::get('/dashboard/manageTicket', [TicketController::class, 'index']);



Route::get('/dasboard/manageUser', function () {
    return view('welcome');
});