<?php declare(strict_types=1);

namespace App\Services;

use App\Contracts\PaymentProcessor;

class Stripe implements PaymentProcessor
{
    public function __construct(private array $config, private SalesTaxCalculator $salesTaxCalculator)
    {
        dump($this->config, $this->salesTaxCalculator);
    }

    public function process(array $transactions): void
    {
        // TODO: Implement process() method.
    }
}
