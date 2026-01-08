<?php

declare(strict_types=1);

namespace Nps\Core\Conversion;

use Nps\Core\Conversion\Concerns\ArrayOf;
use Nps\Core\Conversion\Contracts\Converter;

/**
 * @internal
 */
final class MapOf implements Converter
{
    use ArrayOf;
}
