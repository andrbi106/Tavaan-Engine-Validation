<?php

declare(strict_types=1);

namespace Tavaan\Engine\Validation;

use Tavaan\Core\Contracts\Config\RepositoryInterface as Config;

/**
 * Validator — پیاده‌سازی اصلی موتور.
 *
 * @see \Tavaan\Engine\Validation\Contracts\ValidatorInterface
 */
final class Validator implements Contracts\ValidatorInterface
{
    /**
     * @param Config $config پیکربندی موتور
     */
    public function __construct(
        private readonly Config $config,
    ) {
    }

    /**
     * {@inheritdoc}
     */
    public function make(/* ... */): mixed
    {
        // TODO: پیاده‌سازی make مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function validate(/* ... */): mixed
    {
        // TODO: پیاده‌سازی validate مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function extend(/* ... */): mixed
    {
        // TODO: پیاده‌سازی extend مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function replacer(/* ... */): mixed
    {
        // TODO: پیاده‌سازی replacer مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function forDto(/* ... */): mixed
    {
        // TODO: پیاده‌سازی forDto مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function sometimes(/* ... */): mixed
    {
        // TODO: پیاده‌سازی sometimes مطابق مستندات (سند §3 API).
        return null;
    }
}