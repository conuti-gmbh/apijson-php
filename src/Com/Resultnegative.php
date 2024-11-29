<?php

declare(strict_types=1);

namespace Conuti\ApiJson\Com;

class Resultnegative
{
    public function __construct(
        readonly ?string $decisionTree = null,
        readonly ?string $responseCode = null,
        readonly ?string $reason = null,
        readonly ?int $networkOperator = null,
    ) {
    }
}
