<?php

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

//Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
//    return view('welcome');
//});
Route::get('/',function(){
    return view('welcome');
});

use App\Http\Controllers\Auth\LoginController;
Route::get('login/github', [LoginController::class, 'redirectToGithubProvider']);
Route::get('login/github/callback', [LoginController::class, 'handleGithubProviderCallback']);

Route::get('login/facebook', [LoginController::class, 'redirectToFacebookProvider']);
Route::get('login/facebook/callback', [LoginController::class, 'handleFacebookProviderCallback']);

Route::get('login/google', [LoginController::class, 'redirectToGoogleProvider']);
Route::get('login/google/callback', [LoginController::class, 'handleGoogleProviderCallback']);

//Route::get('/auth/{social_channel}', 'Auth\AuthController@redirect_to_provider');

//Route::get('/auth/{social_channel}/callback', 'Auth\AuthController@handle_provider_callback');


Route::get('logout', [LoginController::class, 'logout']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');    
})->name('dashboard');
