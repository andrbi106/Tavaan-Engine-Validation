<?php

declare(strict_types=1);

/*|--------------------------------------------------------------------------
 | Validation Engine Configuration
 |--------------------------------------------------------------------------
 |
 | پیکربندی موتور validation — همهٔ کلیدهای مستندشده در `docs/03-engines/validation.md` بخش «پیکربندی».
 |
 |@see https://github.com/Derogaramin/Tavaan-Doc/blob/main/docs/03-engines/validation.md
 */

return [
    /*| پیش‌فرض موتور (driver/store یا حالت فعال) */
    'default' => env('VALIDATION_DEFAULT', 'default'),

    /*| کلید کش (در صورت استفاده) */
    'prefix' => env('VALIDATION_PREFIX', 'validation:'),

    /*| تنظیمات لاگ */
    'log' => [
        'channel' => env('VALIDATION_LOG_CHANNEL', 'validation'),
    ],

    /*| Facade */
    'facade' => [
        'name' => 'Validator',
        'accessor' => 'validator',
    ],

    /*| سایر کلیدها (طبق مستندات) */
    'options' => [
        // TODO: کلیدهای اضافی طبق سند §۶ (پیکربندی)
    ],
];