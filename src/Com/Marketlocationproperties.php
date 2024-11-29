<?php

declare(strict_types=1);

namespace Conuti\ApiJson\Com;

use Conuti\ApiJson\Enum\Marketlocationproperty;

class Marketlocationproperties
{
    public function __construct(
        readonly ?Marketlocationproperty $marketLocationProperty = null,
        readonly ?string $executionTimeFrom = null,
        readonly ?string $executionTimeUntil = null,
    ) {
    }
}
