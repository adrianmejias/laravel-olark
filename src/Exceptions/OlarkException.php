<?php

declare(strict_types=1);

namespace AdrianMejias\Olark\Exceptions;

/**
 * Olark Exception
 *
 * @package AdrianMejias\Olark\Exceptions
 */
class OlarkException extends \Exception
{
    /**
     * OlarkException constructor.
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
