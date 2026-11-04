<?php
declare(strict_types=1);

namespace Tavaan\Engine\Validation\Attributes;

use Attribute;

/**
 * #[Required] — فیلد اجباری.
 */
#[Attribute(Attribute::TARGET_PROPERTY)]
final class Required
{
    public function __construct(public readonly ?string $message = null) {}

    public function rule(): string
    {
        return 'required';
    }
}
