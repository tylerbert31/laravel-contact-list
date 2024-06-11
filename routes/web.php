<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactsController;

Route::get('/', [ContactsController::class, 'index']);

Route::get('/add', [ContactsController::class, 'addContact']);
Route::post('/add', [ContactsController::class, 'addContact']);
Route::post('/delete/{id}', [ContactsController::class, 'deleteContact']);




Route::get('/test', [ContactsController::class, 'testRun']);
