<?php

use App\Livewire\Tasks\Tasks;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tasks', Tasks::class);
