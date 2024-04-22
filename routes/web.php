<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('welcome');});

Route::get('sumar', 'App\Http\Controllers\Api\CalculadoraController@sumar');
Route::get('restar', 'App\Http\Controllers\Api\CalculadoraController@restar');