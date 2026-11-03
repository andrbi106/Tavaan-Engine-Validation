<?php

declare(strict_types=1);

namespace Tavaan\Engine\Validation\Tests\Feature;

use PHPUnit\Framework\TestCase;
use Tavaan\Engine\Validation\Validator;
use Tavaan\Engine\Validation\ValidatorServiceProvider;
use Tavaan\Core\Contracts\Config\RepositoryInterface;

/**
 * تست‌های Feature برای موتور Validator.
 *
 * هر سناریوی T-NN از مستندات باید به یک متد testTNN_* تبدیل شود.
 */
final class ValidatorTest extends TestCase
{
    private Validator $engine;

    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->createMock(RepositoryInterface::class);
        $config->method('get')->willReturn(null);
        $this->engine = new Validator($config);
    }

    /**
     * T-01: هر ۸۵ قاعده: پاس و فیل
     */
    public function test_t01______(): void
    {
        // TODO: پیاده‌سازی سناریوی T-01 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-01 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-02: `iran_national_code` با ۲۰ نمونهٔ معتبر/نامعتبر
     */
    public function test_t02_iran_national_code___(): void
    {
        // TODO: پیاده‌سازی سناریوی T-02 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-02 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-03: `iran_sheba`/`iran_card_number` با checksum
     */
    public function test_t03_iran_shebairan_card_number_(): void
    {
        // TODO: پیاده‌سازی سناریوی T-03 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-03 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-04: `unique` با ignore
     */
    public function test_t04_unique__ignore(): void
    {
        // TODO: پیاده‌سازی سناریوی T-04 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-04 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-05: Wildcard `items.*.qty`
     */
    public function test_t05_wildcard_itemsqty(): void
    {
        // TODO: پیاده‌سازی سناریوی T-05 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-05 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-06: FormRequest: authorize fail → 403
     */
    public function test_t06_form_request_authorize_fail__40(): void
    {
        // TODO: پیاده‌سازی سناریوی T-06 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-06 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-07: پیام سفارشی + attribute سفارشی
     */
    public function test_t07____attribute_(): void
    {
        // TODO: پیاده‌سازی سناریوی T-07 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-07 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-08: `validated()` فقط فیلدهای قاعده‌دار
     */
    public function test_t08_validated___(): void
    {
        // TODO: پیاده‌سازی سناریوی T-08 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-08 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-09: قاعدهٔ سفارشی (RuleInterface)
     */
    public function test_t09___rule_interface(): void
    {
        // TODO: پیاده‌سازی سناریوی T-09 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-09 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-10: Attribute-based روی DTO
     */
    public function test_t10_attributebased__dto(): void
    {
        // TODO: پیاده‌سازی سناریوی T-10 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-10 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-11: ReDoS regex → رد
     */
    public function test_t11_re_do_s_regex__(): void
    {
        // TODO: پیاده‌سازی سناریوی T-11 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-11 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-12: ترجمهٔ فارسی/انگلیسی
     */
    public function test_t12__(): void
    {
        // TODO: پیاده‌سازی سناریوی T-12 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-12 هنوز پیاده‌سازی نشده است.');
    }

}