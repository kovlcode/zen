<?php

namespace Kovlcode\Zen\Currencies;

use Kovlcode\Zen\Currencies\Basis\FractionalPartInterface;
use Kovlcode\Zen\Currencies\Basis\AbstractCurrency;
use Kovlcode\Zen\Currencies\Basis\Helps\ClassicCoinCurrency;
use Kovlcode\Zen\Enums\CurrencyEnum;

class EUR extends AbstractCurrency implements FractionalPartInterface
{
    use ClassicCoinCurrency;

    #[\Override]
    protected function getCurrency(): CurrencyEnum
    {
        return CurrencyEnum::EUR;
    }
}