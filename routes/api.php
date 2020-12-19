<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostMethodsController;


Route::get('/', [PostMethodsController::class, 'show']);
Route::post('/post', [PostMethodsController::class, 'postComment']);