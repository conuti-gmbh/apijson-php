<?php

declare(strict_types=1);

namespace Conuti\ApiJson\Com;

class Datameterlocation
{
    public function __construct(
        readonly ?string $meloId = null,
        readonly ?string $meterNumber = null,
        /** @var Meterlocationmeasuringpointoperator[] */
        readonly array $dataMeterLocationMeasuringPointOperators = [],
    ) {
    }
}
