<?php

declare(strict_types=1);

namespace Conuti\ApiJson\Com;

class Identificationparameter_identificationparameteraddress
{
    public function __construct(
        readonly ?Name $name = null,
        readonly ?Address $address = null,
        /** @var Landparcel[] */
        readonly array $landParcels = [],
        readonly ?Geographiccoordinates $geographicCoordinates = null,
    ) {
    }
}
