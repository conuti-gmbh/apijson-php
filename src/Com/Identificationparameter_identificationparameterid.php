<?php

declare(strict_types=1);

namespace Conuti\ApiJson\Com;

class Identificationparameter_identificationparameterid
{
    public function __construct(
        readonly ?string $maloId = null,
        /** @var string[] */
        readonly array $tranchenIds = [],
        /** @var string[] */
        readonly array $meloIds = [],
        /** @var string[] */
        readonly array $meterNumbers = [],
        readonly ?string $customerNumber = null,
    ) {
    }
}
