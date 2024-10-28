<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ParticipantController;


Route::get('/', [DashboardController::class, 'index'])->name('events_view'); //dashboard daftar event
Route::get('/event-detail/{event_id}', [EventController::class, 'index'])->name('event_detail'); //laman rincian event

Route::get('/event-form', [EventController::class, 'create'])->name('event_form'); // menampilkan halaman form untuk event
Route::post('/event-form', [EventController::class, 'store'])->name('add_event'); // menambahkan event

Route::get('/participant-form/{event_id}', [ParticipantController::class, 'create'])->name('participant_form'); // menampilkan halaman form untuk participant
Route::post('/participant-form/{event_id}', [ParticipantController::class, 'store'])->name('add_participant'); // menambahkan participant
