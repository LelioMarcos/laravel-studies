<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoriesController;
use App\Http\Controllers\LoginController;
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

Route::get('/hists', [StoriesController::class, "getStories"]);
Route::post('/hists/post', [StoriesController::class, "postStory"]);
Route::get('/hists/{story}', [StoriesController::class, "getStory"]);

Route::get('/write', [StoriesController::class, "writeStory"]);
Route::get('/login', [LoginController::class, "loginPage"]);
Route::get('/register', [LoginController::class, "registerPage"]);
Route::post('/login', [LoginController::class, "checkLogin"]);
Route::post('/register', [LoginController::class, "checkRegister"]);
