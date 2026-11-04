<?php
declare(strict_types=1);

namespace Tavaan\Engine\Validation\Attributes;

use Attribute;

/**
 * #[IranMobile] — فیلد باید شماره موبایل ایران باشد.
 * الگو: 09xxxxxxxxx
 */
#[Attribute(Attribute::TARGET_PROPERTY)]
final class IranMobile
{
    public function __construct(public readonly ?string $message = null) {}

    public function rule(): string
    {
        return 'iran_mobile';
    }
}
