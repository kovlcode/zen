<?php

namespace Kovlcode\Zen\Currencies\Basis;

interface FractionalPartInterface
{
    public function digits(): int;

    public function precision(): int;
}