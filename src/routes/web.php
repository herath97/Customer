<?php
use Custom\Customer\Livewire\CustomerIndex;
use Custom\Customer\Livewire\CustomerCreate;
use Illuminate\Support\Facades\Route;

Route::middleware(['web'])->group(function () {
    Route::group(['prefix' => 'customers'], function () {
        Route::get('/', CustomerIndex::class)->name('customers.index');
        Route::get('/create', CustomerIndex::class)->name('customers.create');
    });
});


