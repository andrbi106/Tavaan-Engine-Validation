<?php
declare(strict_types=1);

namespace Tavaan\Engine\Validation\Attributes;

use Attribute;

/**
 * #[Email] — فیلد باید email معتبر باشد.
 */
#[Attribute(Attribute::TARGET_PROPERTY)]
final class Email
{
    public function __construct(public readonly ?string $message = null) {}

    public function rule(): string
    {
        return 'email';
    }
}
