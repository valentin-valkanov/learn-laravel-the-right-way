<?php

use App\Http\Controllers\ProcessTransactionController;
use App\Http\Controllers\TransactionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function (){
   return 'Welcome to Dashboard';
});

Route::get('/users', function (){
    return ['Gio', 'Val'];
});

Route::redirect('/', '/dashboard');
Route::get('/transactions', [TransactionController::class, 'index']);
Route::get('/transactions/{transactionId}', [TransactionController::class, 'show'])->whereNumber('transactionId');
Route::get('/transactions/create', [TransactionController::class, 'create']);
Route::post('/transaction', [TransactionController::class, 'store']);

Route::get('/transactions/{transactionId}/process', ProcessTransactionController::class );
