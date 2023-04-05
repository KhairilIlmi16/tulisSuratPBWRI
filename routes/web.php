<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LamaranController;
use App\Http\Controllers\SuratController;
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

Route::get('/suratLamaran',function(){
    return view('suratLamaran');
});
Route::post('/proses-lamaran-docx',[SuratController::class, 'generateSurat']);

Route::get('/SLM', function(){
    return view('SLM');
});
Route::post('/proses-lamaran', [LamaranController::class, 'store']);

Route::get('/SPD', function(){
    return view('SPD');
});
Route::post('/proses-pengunduran', [LamaranController::class, 'store']);



// Route::post('/generate-surat', 'SuratController@generateSurat')->name('generate-surat');
