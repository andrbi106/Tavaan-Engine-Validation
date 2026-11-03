<?php

declare(strict_types=1);

namespace Tavaan\Engine\Validation\Contracts;

/**
 * قرارداد FormRequest.
 *
 * @see \Tavaan\Engine\Validation\FormRequest
 * @api 1.0
 */
interface FormRequestInterface
{
    /**
     * متد authorize.
     *
     * @return mixed
     */
    public function authorize(/* ... */): mixed;

    /**
     * متد rules.
     *
     * @return mixed
     */
    public function rules(/* ... */): mixed;

    /**
     * متد messages.
     *
     * @return mixed
     */
    public function messages(/* ... */): mixed;

    /**
     * متد attributes.
     *
     * @return mixed
     */
    public function attributes(/* ... */): mixed;

    /**
     * متد validated.
     *
     * @return mixed
     */
    public function validated(/* ... */): mixed;

    /**
     * متد validateResolved.
     *
     * @return mixed
     */
    public function validateResolved(/* ... */): mixed;
}