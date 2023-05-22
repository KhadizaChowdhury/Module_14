<?php

use App\Http\Controllers\HelloController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post( '/submit-form', [HelloController::class, 'processForm'] );
Route::get( '/upload-avatar', [HelloController::class, 'uploadAv'] );
Route::post( '/upload-avatar', [HelloController::class, 'uploadAvatar'])->name('upload.avatar');
Route::post( '/submit', [HelloController::class, 'submit'] );