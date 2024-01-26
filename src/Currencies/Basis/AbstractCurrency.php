<?php

namespace Kovlcode\Zen\Currencies\Basis;

use ErrorException;
use Kovlcode\Zen\Enums\CurrencyEnum;

abstract class AbstractCurrency
{
    private int $wholePart = 0;
    private int|null $fractionalPart = null;

    /**
     * @throws ErrorException
     */
    public function __construct(float|int $amount)
    {
        $this->setAmount($amount);
    }

    abstract protected function getCurrency(): CurrencyEnum;

    public function getISO3Name(): string
    {
        return $this->getCurrency()->value;
    }

    /**
     * @throws ErrorException
     */
    public function setAmount(float|int $amount): self
    {
        if ($this instanceof FractionalPartInterface) {
            $parts = explode('.', (string) $amount);

            $this->setWholePart((int) $parts[0]);
            $this->setFractionalPart((int) $parts[1] ?? 0);
        }

        $this->setWholePart((int) $amount);

        return $this;
    }

    public function getAmount(): float|int
    {
        if ($this instanceof FractionalPartInterface) {
            return (float) ($this->wholePart . '.' . $this->fractionalPart);
        }

        return $this->wholePart;
    }

    private function setWholePart(int $wholePart): void
    {
        $this->wholePart = $wholePart;
    }

    /**
     * @throws ErrorException
     */
    private function setFractionalPart(int $fractionalPart): void
    {
        if ($this instanceof FractionalPartInterface) {
            if (strlen((string) $fractionalPart) > $this->digits()) {
                throw new ErrorException('Coin digits limit');
            }

            if ($fractionalPart >= $this->precision()) {
                throw new ErrorException('Coin precision limit');
            }

            $this->fractionalPart = $fractionalPart;
        }
    }
}