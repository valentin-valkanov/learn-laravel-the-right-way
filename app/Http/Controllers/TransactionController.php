<?php

namespace App\Http\Controllers;

use App\Contracts\PaymentProcessor;
use App\Services\TransactionService;
use Illuminate\Contracts\Container\Container;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Support\Facades\App;

class TransactionController extends Controller
{
    public function __construct(private readonly PaymentProcessor $paymentProcessor, private readonly Container $container)
    {
    }

    public function index(Request $request): string
    {
        dump($this->container->make(PaymentProcessor::class));
        echo $request->headers->get('X-Request-Id') . '<br />';
        return 'Transaction page';
    }

    public function show(int $transactionId, TransactionService $transactionService): string
    {
        dump($this->paymentProcessor);
        $transaction = $transactionService->findTransaction($transactionId);
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
