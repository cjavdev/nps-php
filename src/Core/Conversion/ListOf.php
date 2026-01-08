<?php

declare(strict_types=1);

namespace Nps\Core\Conversion;

use Nps\Core\Conversion\Concerns\ArrayOf;
use Nps\Core\Conversion\Contracts\Converter;

/**
 * @internal
 */
final class ListOf implements Converter
{
    use ArrayOf;

    // @phpstan-ignore-next-line missingType.iterableValue
    private function empty(): array|object
    {
        return [];
    }
}
