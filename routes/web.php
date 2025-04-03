<?php

use App\Http\Controllers\DocumentController;
use App\Http\Controllers\ProcessTransactionController;
use App\Http\Controllers\TransactionController;
use App\Http\Middleware\CheckUserRole;
use App\Http\Middleware\SomeOtherMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function (\App\Contracts\PaymentProcessor $paymentProcessor) {
    dd(app());
    return view('welcome');
});

Route::get('/documents', [DocumentController::class, 'index'])->name('documents');

Route::prefix('/administration')->middleware('role:admin')->group(function (){
    Route::get('/', function () {
        return 'Secret Admin Page';
    });

    Route::get('//other', function (){
        return 'Another Admin Page';
    })->withoutMiddleware(SomeOtherMiddleware::class);
});



