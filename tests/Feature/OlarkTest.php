<?php

declare(strict_types=1);

namespace AdrianMejias\Olark\Tests\Feature;

use AdrianMejias\Olark\Contracts\OlarkContract;
use Olark;

it('should handle set site id')->expect(
    fn () => Olark::setSiteId('123')
)->toBeInstanceOf(OlarkContract::class);

it('should handle get site id')->expect(
    fn () => Olark::setSiteId('123456')->getSiteId()
)->toBeString()->toBe('123456');

it('should handle enable')->expect(
    fn () => Olark::enable()
)->toBeInstanceOf(OlarkContract::class);

it('should handle disable')->expect(
    fn () => Olark::disable()
)->toBeInstanceOf(OlarkContract::class);

it('should handle check if enabled')->expect(
    fn () => Olark::enable()->isEnabled()
)->toBeBool()->toBe(true);

it('should handle check if disabled')->expect(
    fn () => Olark::disable()->isDisabled()
)->toBeBool()->toBe(true);

it('should handle get widget')->expect(
    fn () => Olark::enable()->getWidget()
)->toBeString()->toContain('<script');
