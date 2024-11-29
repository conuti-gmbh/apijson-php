<?php

declare(strict_types=1);

namespace Conuti\ApiJson\Com;

class Datacontrollableresource
{
    public function __construct(
        readonly ?string $srId = null,
        /** @var Srmarketpartner[] */
        readonly array $dataControllableResourceMeasuringPointOperators = [],
    ) {
    }
}
