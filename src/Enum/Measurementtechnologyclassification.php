<?php

declare(strict_types=1);

namespace Conuti\ApiJson\Enum;

enum Measurementtechnologyclassification: string
{
    case INTELLIGENTMEASURINGSYSTEM = 'intelligentMeasuringSystem';
    case CONVENTIONALMEASURINGSYSTEM = 'conventionalMeasuringSystem';
    case NOMEASUREMENT = 'noMeasurement';
}
