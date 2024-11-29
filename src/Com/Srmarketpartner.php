<?php

declare(strict_types=1);

namespace Conuti\ApiJson\Com;

class Srmarketpartner
{
    public function __construct(
        readonly ?int $marketPartnerId = null,
        readonly ?string $executionTimeFrom = null,
        readonly ?string $executionTimeUntil = null,
    ) {
    }
}
