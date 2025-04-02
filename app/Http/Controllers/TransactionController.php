<?php

namespace App\Http\Controllers;

use App\Services\TransactionService;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;

class TransactionController extends Controller
{
    public function __construct(private readonly TransactionService $transactionService)
    {
    }

    public function index(Request $request): string
    {
        echo $request->headers->get('X-Request-Id') . '<br />';
        return 'Transaction page';
    }

    public function show(int $transactionId): string
    {
        $transaction = $this->transactionService->findTransaction($transactionId);
        return 'Transaction: ' . $transactionId . ', ' . $transaction['amount'];
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
}
