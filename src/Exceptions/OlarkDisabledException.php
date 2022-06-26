<?php

declare(strict_types=1);

namespace AdrianMejias\Olark\Exceptions;

/**
 * Olark Disabled Exception
 *
 * @package AdrianMejias\Olark\Exceptions
 */
class OlarkDisabledException extends OlarkException
{
    /**
     * OlarkDisabledException constructor.
     *
     * @param string $message
     * @param int $code
     * @param \Throwable|null $previous
     * @return void
     */
    public function __construct(
        string $message = '',
        int $code = 0,
        \Throwable $previous = null
    ) {
        parent::__construct(
            $message,
            $code,
            $previous
        );
    }
}
