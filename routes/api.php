<?php

use App\Http\Controllers\AnswersController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\NewPasswordController;
use App\Http\Controllers\QuestionsController;
use App\Http\Controllers\AdminController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post('/register', [AuthController::class, 'register']);

Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->get('/logout', [AuthController::class, 'logout']);

Route::get('/admin',[AdminController::class, 'index'])->middleware('auth.admin')->name('admin.index');



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('forgot-password', [NewPasswordController::class, 'ForgotPassword']);

Route::post('reset-password', [NewPasswordController::class, 'reset']);

// Route::post('agregar_pregunta', [AuthController::class, 'reset']);
Route::resource('/questions', QuestionsController::class);
Route::resource('/answers', AnswersController::class);