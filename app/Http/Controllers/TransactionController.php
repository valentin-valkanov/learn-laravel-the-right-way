<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;

class TransactionController extends Controller implements HasMiddleware
{
    public function index(Request $request): string
    {
        echo $request->headers->get('X-Request-Id') . '<br />';
        return 'Transaction page';
    }

    public function show(int $transactionId): string
    {
        return 'Transaction: ' . $transactionId;
    }

    public function create(): string
    {
        return 'Form to Create a Transaction';
    }

    public function store(Request $request): string
    {
        return 'Transaction Created';
    }

    public function documents(): string
    {
        return 'Transaction Documents';
    }

    public static function middleware()
    {
        return [
            ''
        ];
    }
}
