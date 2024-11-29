<?php

declare(strict_types=1);

namespace Conuti\ApiJson\Com;

class Address
{
    public function __construct(
        readonly ?string $countryCode = null,
        readonly ?string $zipCode = null,
        readonly ?string $city = null,
        readonly ?string $street = null,
        readonly ?int $houseNumber = null,
        readonly ?string $houseNumberAddition = null,
    ) {
    }
}
