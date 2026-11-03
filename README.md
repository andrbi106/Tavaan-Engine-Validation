# Tavaan Engine — Validation

> **اعتبارسنجی** — موتور Validation در فریمورک تَوان

## مشخصات

| فیلد | مقدار |
|---|---|
| شناسه | `tavaan.engine.validation` |
| نام | `Validation` |
| عنوان فارسی | اعتبارسنجی |
| نسخه | `0.1.0` |
| namespace | `Tavaan\Engine\Validation` |
| نوع | `engine` |
| Facade | `Validator` (accessor: `validator`) |

## قراردادها (Contracts)

این موتور قراردادهای زیر را ارائه می‌دهد:

- `Tavaan\Engine\Validation\Contracts\RuleInterface`
- `Tavaan\Engine\Validation\Contracts\ValidatorInterface`

## خطاها (Exceptions)

- `Tavaan\Engine\Validation\Exceptions\ValidationException`

## Facadeها

- `Tavaan\Engine\Validation\Facades\Validator`

## کلاس‌های اصلی

- `src/Attributes/IranianNationalCode.php`
- `src/Attributes/MaxLength.php`
- `src/Attributes/MinLength.php`
- `src/Attributes/ValidationAttribute.php`
- `src/Concerns/ValidatesAttributes.php`
- `src/DtoValidator.php`
- `src/FormRequest.php`
- `src/MessageBag.php`
- `src/ParsedRule.php`
- `src/RuleParser.php`
- `src/Rules/BuiltInRules.php`
- `src/Rules/ExistsRule.php`
- `src/Rules/InRule.php`
- `src/Rules/Rule.php`
- `src/Rules/UniqueRule.php`
- `src/Support/IranianChecks.php`
- `src/Testing/CreateUserDto.php`
- `src/Testing/StoreOrderFormRequest.php`
- `src/ValidationServiceProvider.php`
- `src/Validator.php`
- ... و 1 فایل دیگر

## Service Providerها

- `Tavaan\Engine\Validation\ValidationServiceProvider`

## وابستگی‌ها

**موتورهای مورد‌نیاز:**

- `i18n`
- `config`

## پیکربندی

- فایل پیکربندی: `config/validation.php`
- کلید: `validation`

## نصب

```bash
git clone https://github.com/andrbi106/Tavaan-Engine-Validation.git
```

این موتور بخشی از فریمورک تَوان است و معمولاً به‌صورت مستقیم نصب نمی‌شود،
بلکه توسط [Tavaan-Core](https://github.com/andrbi106/Tavaan-Core) مدیریت می‌شود.

## روابط با سایر مخازن

| مخزن | نقش |
|---|---|
| **`andrbi106/Tavaan-Engine-Validation`** (این مخزن) | موتور Validation |
| `andrbi106/Tavaan-Engine-Core` | ساختار پایه + درگاه ارتباط موتورها |
| `andrbi106/Tavaan-Core` | اسکلت اپلیکیشن + همهٔ موتورها |
| `Derogaramin/Tavaan-Framework` | فریمورک مادر (monorepo) |

## مجوز

MIT — هم‌راستا با فریمورک مادر تَوان.
