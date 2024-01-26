<?php

namespace Kovlcode\Zen\API\Basis;

use Kovlcode\Zen\API\Basis\Enums\HttpMethodEnum;

abstract class AbstractRequest
{
    protected string|null $requestId = null;

    abstract public function getHttpMethod(): HttpMethodEnum;

    abstract public function getUri(): string;

    public function setRequestId(string $requestId): self
    {
        $this->requestId = $requestId;

        return $this;
    }

    public function getRequestId(): string
    {
        if (null === $this->requestId) {
            $this->requestId = bin2hex(random_bytes(32));
        }

        return $this->requestId;
    }

    public function headerParameters(): array
    {
        return [
            'request-id' => $this->getRequestId(),
        ];
    }
}