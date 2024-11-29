<?php

declare(strict_types=1);

namespace Conuti\ApiJson\Com;

class Marketlocationdatetime
{
    public function __construct(
        readonly ?string $maloId = null,
        readonly ?string $executionTimeFrom = null,
        readonly ?string $executionTimeUntil = null,
    ) {
    }
}
