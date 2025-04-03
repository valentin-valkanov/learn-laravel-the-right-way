<?php declare(strict_types=1);

namespace App\Contracts;

/**
 * Class PaymentProcessor
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @copyright
 * @version
 */
interface PaymentProcessor
{
    public function process(array $transactions): void;
}
