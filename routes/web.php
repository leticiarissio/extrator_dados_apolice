<?php

use App\Http\Controllers\MainController;
use App\Livewire\MainComponent;
use Illuminate\Support\Facades\Route;

Route::get('/', MainComponent::class);
Route::get('/gemini', [MainController::class,'submit']);