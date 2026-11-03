<?php

declare(strict_types=1);

namespace Tavaan\Engine\Validation;

use Tavaan\Core\Contracts\Config\RepositoryInterface as Config;

/**
 * FormRequest — پیاده‌سازی اصلی موتور.
 *
 * @see \Tavaan\Engine\Validation\Contracts\FormRequestInterface
 */
final class FormRequest implements Contracts\FormRequestInterface
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
    public function authorize(/* ... */): mixed
    {
        // TODO: پیاده‌سازی authorize مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function rules(/* ... */): mixed
    {
        // TODO: پیاده‌سازی rules مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function messages(/* ... */): mixed
    {
        // TODO: پیاده‌سازی messages مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function attributes(/* ... */): mixed
    {
        // TODO: پیاده‌سازی attributes مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function validated(/* ... */): mixed
    {
        // TODO: پیاده‌سازی validated مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function validateResolved(/* ... */): mixed
    {
        // TODO: پیاده‌سازی validateResolved مطابق مستندات (سند §3 API).
        return null;
    }
}