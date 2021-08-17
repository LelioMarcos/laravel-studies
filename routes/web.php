<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoriesController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserPageController;
use Illuminate\Support\Facades\Auth;

Route::get('/', [StoriesController::class, "getStories"])->name("main");
Route::get('/story/{story}', [StoriesController::class, "getStory"])->name("story");
Route::get('/write', [StoriesController::class, "writeStory"]);
Route::get('/login', [LoginController::class, "loginPage"]);
Route::get('/register', [LoginController::class, "registerPage"]);
Route::get('/user/{user}', [UserPageController::class, "getUser"]);
Route::get('/logout', function () {
    Auth::logout();
    return redirect(route('main'));
});

Route::post('/login', [LoginController::class, "checkLogin"]);
Route::post('/register', [LoginController::class, "checkRegister"]);
Route::post('/story', [StoriesController::class, "postStory"]);

Route::delete('/story/{story}', [StoriesController::class, "deleteStory"]);