<?php

declare(strict_types=1);

namespace Conuti\ApiJson\Com;

class Marketlocationnetworkoperator
{
    public function __construct(
        readonly ?int $marketPartnerId = null,
        readonly ?string $executionTimeFrom = null,
        readonly ?string $executionTimeUntil = null,
    ) {
    }
}
