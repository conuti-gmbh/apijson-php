<?php

declare(strict_types=1);

namespace Conuti\ApiJson\Com;

class Landparcel
{
    public function __construct(
        readonly ?string $districtName = null,
        readonly ?string $lotNumber = null,
        readonly ?string $subLotNumber = null,
    ) {
    }
}
