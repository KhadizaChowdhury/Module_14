<?php

use App\Http\Controllers\HelloController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get( '/user-agent', [HelloController::class, 'getUserAgent']);
Route::get( '/your-endpoint', [HelloController::class, 'getPage']);
Route::get( '/json-response', [HelloController::class, 'createJsonResponse']);
Route::get( '/upload-avatar', [HelloController::class, 'uploadAv'] )->name( 'upload.avatar' );
Route::get( '/retrieve-cookie', [HelloController::class, 'retrieveCookie'] )->name( 'retrieve.cookie' );



Route::post('/hello-body', [HelloController::class, 'helloBody']);
Route::post('/hello-body/{name}', [HelloController::class, 'helloBody']);
Route::get('/hello-body-string', [HelloController::class, 'helloBodyString']);
Route::get('/hello-header', [HelloController::class, 'helloHeader']);
