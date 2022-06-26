<?php

declare(strict_types=1);

namespace AdrianMejias\Olark\Tests\Unit;

use AdrianMejias\Olark\Contracts\OlarkContract;
use Illuminate\Support\Facades\View;
use Olark;

it('should handle mock get site id', function () {
    $siteId = '12345';

    Olark::shouldReceive('getSiteId')->once()
        ->andReturn($siteId);

    $result = Olark::getSiteId();
    expect($result)->toBeString()->toBe($siteId);
});

it('should handle mock set site id', function () {
    $siteId = '12345';

    Olark::shouldReceive('setSiteId')->once()
        ->with($siteId)
        ->andReturnSelf();

    $result = Olark::setSiteId($siteId);
    expect($result)->toBeInstanceOf(OlarkContract::class);
});

it('should handle mock enable', function () {
    Olark::shouldReceive('enable')->once()
        ->andReturnSelf();

    $result = Olark::enable();
    expect($result)->toBeInstanceOf(OlarkContract::class);
});

it('should handle mock disable', function () {
    Olark::shouldReceive('disable')->once()
        ->andReturnSelf();

    $result = Olark::disable();
    expect($result)->toBeInstanceOf(OlarkContract::class);
});

it('should handle mock check if enabled', function () {
    Olark::shouldReceive('isEnabled')->once()
        ->andReturn(true);

    $result = Olark::isEnabled();
    expect($result)->toBeBool()->toBe(true);
});

it('should handle mock check if disabled', function () {
    Olark::shouldReceive('isDisabled')->once()
        ->andReturn(true);

    $result = Olark::isDisabled();
    expect($result)->toBeBool()->toBe(true);
});

it('should handle mock get widget', function () {
    $widget = View::make('olark::widget')->render();

    Olark::shouldReceive('getWidget')->once()
        ->andReturn($widget);

    $result = Olark::getWidget();
    expect($result)->toBeString()->toBe($widget);
});
