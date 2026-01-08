<?php

declare(strict_types=1);

namespace Nps\Core\Conversion\Contracts;

use Nps\Core\Conversion\CoerceState;
use Nps\Core\Conversion\DumpState;

/**
 * @internal
 */
interface Converter
{
    /**
     * @internal
     */
    public function coerce(mixed $value, CoerceState $state): mixed;

    /**
     * @internal
     */
    public function dump(mixed $value, DumpState $state): mixed;
}
