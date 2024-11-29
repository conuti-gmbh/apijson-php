<?php

declare(strict_types=1);

namespace Conuti\ApiJson\Com;

class Datanetworklocation
{
    public function __construct(
        readonly ?string $neloId = null,
        /** @var Networklocationmeasuringpointoperator[] */
        readonly array $dataNetworkLocationMeasuringPointOperators = [],
    ) {
    }
}
