<?php

declare(strict_types=1);

namespace Conuti\ApiJson\Enum;

enum Energydirection: string
{
    case CONSUMPTION = 'consumption';
    case PRODUCTION = 'production';
}
