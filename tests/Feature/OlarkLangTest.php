<?php

declare(strict_types=1);

namespace AdrianMejias\Olark\Tests\Feature;

use Illuminate\Support\Facades\Lang;

it('should handle language for failed')->expect(
    fn () => Lang::hasForLocale('olark::olark.failed')
)->toBeBool()->toBe(true);

it('should handle language for site id')->expect(
    fn () => Lang::hasForLocale('olark::olark.site_id')
)->toBeBool()->toBe(true);

it('should handle language for disabled')->expect(
    fn () => Lang::hasForLocale('olark::olark.disabled')
)->toBeBool()->toBe(true);
