<?php

namespace Kovlcode\Zen\Enums;

enum TransactionTypeEnum: string
{
    case TRT_PURCHASE = 'TRT_PURCHASE';
    case TRT_REFUND = 'TRT_REFUND';
}