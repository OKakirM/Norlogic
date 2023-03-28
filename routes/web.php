<?php

use Illuminate\Support\Facades\Route;
use App\Http\MailController;

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

Route::get('/academia', function () {
    return view('academia');
});

Route::get('/politica_de_privacidade', function () {
    return view('privacidade');
});

Route::get('/send', [App\Http\Controllers\MailController::class, "sendMail"]);