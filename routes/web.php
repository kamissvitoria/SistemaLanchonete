<?php

use App\Livewire\Cliente\Create;
use App\Livewire\Cliente\Index;
use Illuminate\Support\Facades\Route;

Route::get('/cliente/create', Create::class)->name('cliente.editar');;
Route::get('/cliente/index', Index::class);
Route::get('/cliente/edit', Index::class);