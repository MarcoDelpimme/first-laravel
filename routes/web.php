<?php

use App\Http\Controllers\ActivityController;
use Illuminate\Support\Facades\Route;

Route::get('/list', [ActivityController::class, 'index'])->name('index');

Route::get('/details/{id}', [ActivityController::class, 'details'])->name('details');


Route::get('/modify', [ActivityController::class, 'modify'])->name('modify');

Route::get('/create', [ActivityController::class, 'create'])->name('create');
