<?php

declare(strict_types=1);

namespace Tavaan\Engine\Validation\Contracts;

/**
 * قرارداد Validator.
 *
 * @see \Tavaan\Engine\Validation\Validator
 * @api 1.0
 */
interface ValidatorInterface
{
    /**
     * متد make.
     *
     * @return mixed
     */
    public function make(/* ... */): mixed;

    /**
     * متد validate.
     *
     * @return mixed
     */
    public function validate(/* ... */): mixed;

    /**
     * متد extend.
     *
     * @return mixed
     */
    public function extend(/* ... */): mixed;

    /**
     * متد replacer.
     *
     * @return mixed
     */
    public function replacer(/* ... */): mixed;

    /**
     * متد forDto.
     *
     * @return mixed
     */
    public function forDto(/* ... */): mixed;

    /**
     * متد sometimes.
     *
     * @return mixed
     */
    public function sometimes(/* ... */): mixed;
}