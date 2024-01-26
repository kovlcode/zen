<?php

namespace Kovlcode\Zen\API\Requests\Authorization;

use Kovlcode\Zen\API\Basis\AbstractRequest;
use Kovlcode\Zen\API\Basis\Enums\BodyParametersInterface;
use Kovlcode\Zen\API\Basis\Enums\HttpMethodEnum;
use Kovlcode\Zen\Currencies\Basis\AbstractCurrency;

class AuthorizationCalculate extends AbstractRequest implements BodyParametersInterface
{
    const string URI = '/v1/authorization/calculate';

    public function __construct(
        private readonly string $merchantTransactionId,
        private readonly AbstractCurrency $currency,
        private readonly array $data, // TODO: need change to interface value object
    ) {}

    #[\Override]
    public function getHttpMethod(): HttpMethodEnum
    {
        return HttpMethodEnum::POST;
    }

    #[\Override]
    public function getUri(): string
    {
        return self::URI;
    }

    #[\Override]
    public function bodyParameters(): array
    {
        return [
            'merchantTransactionId' => $this->merchantTransactionId,
            'amount' => (string) $this->currency->getAmount(),
            'currency' => $this->currency->getISO3Name(),
            'authorizationCurrency' => $this->currency->getISO3Name(),
            'data' => $this->data,
        ];
    }
}