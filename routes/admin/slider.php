<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SliderController;


Route::middleware('auth')
    ->prefix('user/slider')
    ->name('user.slider.')
    ->group(function () {
        Route::get('/', [SliderController::class, 'index'])->name('index');
        Route::post('/store-or-Update', [SliderController::class, 'storeOrUpdate'])->name('storeOrUpdate');
        Route::delete('/{id}/delete', [SliderController::class, 'delete'])->name('delete');
    });
