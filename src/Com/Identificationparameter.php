<?php

declare(strict_types=1);

namespace Conuti\ApiJson\Com;

use Conuti\ApiJson\Enum\Energydirection;

class Identificationparameter
{
    public function __construct(
        readonly ?string $identificationDateTime = null,
        readonly ?Energydirection $energyDirection = null,
        readonly ?Identificationparameter_identificationparameterid $identificationParameterId = null,
        readonly ?Identificationparameter_identificationparameteraddress $identificationParameterAddress = null,
    ) {
    }
}
