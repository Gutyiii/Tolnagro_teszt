<?php

use App\Http\Controllers\EmailController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('welcome');});

Route::get('/emails', [EmailController::class, 'index'])->name('emails.index');
Route::get('/emails/create', [EmailController::class, 'create'])->name('emails.create');
Route::post('/emails', [EmailController::class, 'store'])->name('emails.store');
Route::delete('/emails/{id}', [EmailController::class, 'destroy'])->name('emails.destroy');