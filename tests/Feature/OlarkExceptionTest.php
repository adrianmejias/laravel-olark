<?php

declare(strict_types=1);

namespace AdrianMejias\Olark\Tests\Feature;

use AdrianMejias\Olark\Exceptions\OlarkDisabledException;
use AdrianMejias\Olark\Exceptions\OlarkSiteIdException;
use Olark;

it(
    'throws an exception when site id is empty',
    fn () =>
    Olark::setSiteId('')->getWidget()
)->throws(OlarkSiteIdException::class);

it(
    'throws an exception when disabled',
    fn () =>
    Olark::disable()->getWidget()
)->throws(OlarkDisabledException::class);
