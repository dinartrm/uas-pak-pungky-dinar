<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KotaController;

Route::get('/', [KotaController::class, 'index'])->name('list-kota');

