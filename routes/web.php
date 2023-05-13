<?php

use App\Http\Controllers\FileController;
use Illuminate\Support\Facades\Route;

Route::get('/file',[FileController::class,'index'])->name('files.index');
Route::post('/file/import',[FileController::class,'import'])->name('files.import');


Route::get('/', function () {
    return view('welcome');
});
