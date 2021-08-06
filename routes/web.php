<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoriesController;
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
Route::get('/hists/write', [StoriesController::class, "writeStory"]);
Route::post('/hists/post', [StoriesController::class, "postStory"]);

Route::get('/hists/{story}', [StoriesController::class, "getStory"]);