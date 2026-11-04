<?php
declare(strict_types=1);

namespace Tavaan\Engine\Validation\Attributes;

use Attribute;

/**
 * #[Between(min, max)] — فیلد باید بین min و max باشد.
 */
#[Attribute(Attribute::TARGET_PROPERTY)]
final class Between
{
    public function __construct(
        public readonly int|float $min,
        public readonly int|float $max,
        public readonly ?string $message = null,
    ) {}

    public function rule(): string
    {
        return "between:{$this->min},{$this->max}";
    }
}
