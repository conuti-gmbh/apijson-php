<?php

declare(strict_types=1);

namespace Conuti\ApiJson\Com;

use Conuti\ApiJson\Enum\Proportion;

class Datatranche
{
    public function __construct(
        readonly ?string $tranchenId = null,
        readonly ?Proportion $proportion = null,
        readonly ?float $percent = null,
        /** @var Tranchesupplier[] */
        readonly array $dataTrancheSuppliers = [],
    ) {
    }
}
