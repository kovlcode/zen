<?php

namespace Kovlcode\Zen\Currencies\Basis\Helps;

trait ClassicCoinCurrency
{
    #[\Override]
    public function digits(): int
    {
        return 2;
    }

    #[\Override]
    public function precision(): int
    {
        return 100;
    }
}