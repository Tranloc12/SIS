<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonalController;
use App\Http\Controllers\DocumentController;



Route::get('/', function () {
    return view('profile');
});


Route::get('/profile', function () {
    return view('profile');
});


Route::get('/personal', [PersonalController::class, 'showPersonalForm'])->name('personal.form');

Route::get('/documents', [DocumentController::class, 'showDocumentForm'])->name('documents.form');

