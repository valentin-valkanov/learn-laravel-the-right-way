<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProcessTransactionController extends Controller
{
    public function __invoke(Request $request, int $transactionId)
    {
        return 'Processed transaction ' . $transactionId;
    }
}
