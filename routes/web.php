<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'principal');
Route::Resource('citas','CitaController');
