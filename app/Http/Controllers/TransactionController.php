<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index(): string
    {
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
}
