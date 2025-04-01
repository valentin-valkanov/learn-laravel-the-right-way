<?php

use App\Http\Middleware\AssignRequestId;
use App\Http\Middleware\CheckUserRole;
use App\Http\Middleware\SomeOtherMiddleware;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Support\Facades\Route;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
        then: function (){
            Route::prefix('transactions')
                ->name('transactions.')
                ->group(base_path('routes/transactions.php'));
        }
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias(
            ['role' => CheckUserRole::class]
        );

        $middleware->append(AssignRequestId::class);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
