<?php

declare(strict_types=1);

namespace Conuti\ApiJson\Com;

class Marketlocationsupplier
{
    public function __construct(
        readonly ?int $marketPartnerId = null,
        readonly ?string $executionTimeFrom = null,
        readonly ?string $executionTimeUntil = null,
    ) {
    }
}
