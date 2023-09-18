<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChartController;

Route::get('/', function () {
    return view('index');
})->name('HOME');

Route::get('/',[ChartController::class, 'index'])->name('index');
Route::get('/update',[ChartController::class,'statusUpdate'])->name('statusUpdate');
Route::post('/toggle', [ChartController::class, 'toggleStatus'])->name('status.toggle');
Route::post('/time', [ChartController::class, 'store'])->name('time.store');
