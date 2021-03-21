<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\HelloController2;

Route::get('/building', [HelloController::class, 'index']);

Route::get('/building/{room}', function ($room) {
    return "部屋番号は" . $room . "です";
});