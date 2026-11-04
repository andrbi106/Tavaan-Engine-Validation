<?php
declare(strict_types=1);

namespace Tavaan\Engine\Validation\Attributes;

use Attribute;

/**
 * #[Integer] — فیلد باید عدد صحیح باشد.
 */
#[Attribute(Attribute::TARGET_PROPERTY)]
final class Integer
{
    public function __construct(public readonly ?string $message = null) {}

    public function rule(): string
    {
        return 'integer';
    }
}
