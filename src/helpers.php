<?php

declare(strict_types=1);

namespace AdrianMejias\Olark;

if (! function_exists('olark')) {
    /**
     * Get the Olark instance.
     *
     * @return \AdrianMejias\Olark\Contracts\OlarkContract
     */
    function olark(): \AdrianMejias\Olark\Contracts\OlarkContract
    {
        return app('olark');
    }
}
