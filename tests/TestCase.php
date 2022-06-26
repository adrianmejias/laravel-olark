<?php

declare(strict_types=1);

namespace AdrianMejias\Olark\Tests;

/** @inheritDoc */
class TestCase extends \Orchestra\Testbench\TestCase
{
    /** @inheritDoc */
    protected $loadEnvironmentVariables = true;

    /** @inheritDoc */
    protected function getPackageProviders($app): array
    {
        return [
            \AdrianMejias\Olark\Providers\OlarkServiceProvider::class,
        ];
    }

    /** @inheritDoc */
    protected function getPackageAliases($app): array
    {
        return [
            'Olark' => \AdrianMejias\Olark\Facades\OlarkFacade::class,
            'View' => \Illuminate\Support\Facades\View::class,
        ];
    }

    /** @inheritDoc */
    public function ignorePackageDiscoveriesFrom(): array
    {
        return [];
    }
}
