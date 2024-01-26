<?php

namespace Kovlcode\Zen\API\Requests\Terminals;

use Kovlcode\Zen\API\Basis\AbstractRequest;
use Kovlcode\Zen\API\Basis\Enums\HttpMethodEnum;
use Kovlcode\Zen\API\Basis\QueryParametersInterface;
use Kovlcode\Zen\Currencies\Basis\AbstractCurrency;
use Kovlcode\Zen\Enums\TransactionTypeEnum;
use Kovlcode\Zen\API\Requests\Terminals\Enums\DirectionEnum;

class Terminals extends AbstractRequest implements QueryParametersInterface
{
    const string URI = '/v2/terminals';

    public function __construct(
        private readonly AbstractCurrency $currency,
        private readonly TransactionTypeEnum $transactionType = TransactionTypeEnum::TRT_PURCHASE,
        private int $itemsPerPage = 10,
        private int $page = 1,
        private DirectionEnum $direction = DirectionEnum::ASC,
        protected string|null $requestId = null,
    ) {}

    #[\Override]
    public function getHttpMethod(): HttpMethodEnum
    {
        return HttpMethodEnum::GET;
    }

    #[\Override]
    public function getUri(): string
    {
        return self::URI;
    }

    #[\Override]
    public function queryParameters(): array
    {
        return [
            'transactionType' => $this->transactionType->value,
            'amount' => $this->currency->getAmount(),
            'currency' => $this->currency->getISO3Name(),
            'itemsPerPage' => $this->itemsPerPage,
            'page' => $this->page,
            'direction' => $this->direction->value,
        ];
    }
}