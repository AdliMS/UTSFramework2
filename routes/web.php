<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;


Route::get('/', [DashboardController::class, 'index'])->name('events_view');

Route::get('/form-acara', [EventController::class, 'index'])->name('event_form'); // menampilkan halaman form untuk event
Route::post('/form-acara', [EventController::class, 'store'])->name('add_event'); // menambahkan event
