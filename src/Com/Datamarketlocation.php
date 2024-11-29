<?php

declare(strict_types=1);

namespace Conuti\ApiJson\Com;

use Conuti\ApiJson\Enum\Energydirection;
use Conuti\ApiJson\Enum\Measurementtechnologyclassification;
use Conuti\ApiJson\Enum\Optionalchangeforecastbasis;

class Datamarketlocation
{
    public function __construct(
        readonly ?string $maloId = null,
        readonly ?Energydirection $energyDirection = null,
        readonly ?Measurementtechnologyclassification $measurementTechnologyClassification = null,
        readonly ?Optionalchangeforecastbasis $optionalChangeForecastBasis = null,
        /** @var Marketlocationproperties[] */
        readonly array $dataMarketLocationProperties = [],
        /** @var Marketlocationnetworkoperator[] */
        readonly array $dataMarketLocationNetworkOperators = [],
        /** @var Marketlocationmeasuringpointoperator[] */
        readonly array $dataMarketLocationMeasuringPointOperators = [],
        /** @var Marketlocationtransmissionsystemoperator[] */
        readonly array $dataMarketLocationTransmissionSystemOperators = [],
        /** @var Marketlocationsupplier[] */
        readonly array $dataMarketLocationSuppliers = [],
        readonly ?Name $dataMarketLocationName = null,
        readonly ?Address $dataMarketLocationAddress = null,
        /** @var Landparcel[] */
        readonly array $dataMarketLocationLandParcels = [],
        readonly ?Geographiccoordinates $dataMarketLocationGeographicCoordinates = null,
    ) {
    }
}
