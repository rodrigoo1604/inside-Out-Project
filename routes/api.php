<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\JournalController;

Route::get('/journals', [JournalController::class, 'index'])->name('apihome');
Route::delete('/journals/{id}', [JournalController::class, 'destroy'])->name('apidestroy');
Route::post('/journals', [JournalController::class, 'store'])->name('apistore');
Route::put('/journals/{id}', [JournalController::class, 'update'])->name('apiupdate');
Route::get('/journals/{id}',[JournalController::class, 'show'])->name('apishow');
