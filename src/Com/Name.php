<?php

declare(strict_types=1);

namespace Conuti\ApiJson\Com;

class Name
{
    public function __construct(
        readonly ?string $surnames = null,
        readonly ?string $firstnames = null,
        readonly ?string $title = null,
        readonly ?string $company = null,
    ) {
    }
}
