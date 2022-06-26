<?php

declare(strict_types=1);

namespace AdrianMejias\Olark\Tests\Unit;

use AdrianMejias\Olark\Exceptions\OlarkDisabledException;
use AdrianMejias\Olark\Exceptions\OlarkSiteIdException;
use Olark;

it('throws an exception when site id is empty', function () {
    $siteId = '';

    Olark::shouldReceive('setSiteId')->once()
        ->with($siteId)->andReturnSelf();
    Olark::shouldReceive('getWidget')->once()
        ->andThrow(OlarkSiteIdException::class);

    Olark::setSiteId($siteId);
    Olark::getWidget();
})->throws(OlarkSiteIdException::class);

it('throws an exception when disabled', function () {
    Olark::shouldReceive('disable')->once()
        ->andReturnSelf();
    Olark::shouldReceive('getWidget')->once()
        ->andThrow(OlarkDisabledException::class);

    Olark::disable()->getWidget();
})->throws(OlarkDisabledException::class);
