<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TutorController;
use App\Http\Controllers\ParentController;
use App\Http\Controllers\TPostController;
use App\Http\Controllers\PPostController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/name', function (){
    return 'giang';
});

Route::resource('users', UserController::class);

Route::get('email', [ UserController::class, 'getemail' ]);

Route::resource('tutors', TutorController::class);

Route::resource('t_posts', TPostController::class);

Route::resource('parents', ParentController::class);

Route::resource('p_posts', PPostController::class);