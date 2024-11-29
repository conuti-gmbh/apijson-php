<?php

declare(strict_types=1);

namespace Conuti\ApiJson\Com;

use Conuti\ApiJson\Enum\Zone;

class Geographiccoordinates
{
    public function __construct(
        readonly ?string $latitude = null,
        readonly ?string $longitude = null,
        readonly ?string $east = null,
        readonly ?string $north = null,
        readonly ?Zone $zone = null,
        readonly ?string $northing = null,
        readonly ?string $easting = null,
    ) {
    }
}
