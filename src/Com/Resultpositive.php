<?php

declare(strict_types=1);

namespace Conuti\ApiJson\Com;

class Resultpositive
{
    public function __construct(
        readonly ?Datamarketlocation $dataMarketLocation = null,
        /** @var Datatranche[] */
        readonly array $dataTranches = [],
        /** @var Datameterlocation[] */
        readonly array $dataMeterLocations = [],
        /** @var Datatechnicalresource[] */
        readonly array $dataTechnicalResources = [],
        /** @var Datacontrollableresource[] */
        readonly array $dataControllableResources = [],
        /** @var Datanetworklocation[] */
        readonly array $dataNetworkLocations = [],
    ) {
    }
}
