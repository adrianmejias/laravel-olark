<?php

declare(strict_types=1);

namespace AdrianMejias\Olark\Providers;

use Illuminate\Support\Facades\Blade;

class OlarkServiceProvider extends \Illuminate\Support\ServiceProvider
{
    /** @inheritDoc */
    public function register(): void
    {
        $this->app->bind(
            \AdrianMejias\Olark\Contracts\OlarkContract::class,
            \AdrianMejias\Olark\Olark::class
        );

        $this->app->singleton(
            \AdrianMejias\Olark\Contracts\OlarkContract::class,
            \AdrianMejias\Olark\Olark::class
        );

        $this->app->alias(
            \AdrianMejias\Olark\Contracts\OlarkContract::class,
            'olark'
        );
    }

    /** @inheritDoc */
    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'olark');
        $this->mergeConfigFrom(__DIR__ . '/../../config/olark.php', 'olark');
        $this->loadTranslationsFrom(__DIR__ . '/../../resources/lang', 'olark');

        $this->publishes([
            dirname(__DIR__, 2) . '/config/olark.php' => config_path('olark.php'),
        ], 'olark-config');
        $this->publishes([
            dirname(__DIR__, 2) . '/resources/views' => resource_path('views/vendor/olark'),
        ], 'olark-views');
        $this->publishes([
            dirname(__DIR__, 2) . '/resources/lang' => resource_path('lang/vendor/olark'),
        ], 'olark-lang');

        $this->loadBladeDirectives();
    }

    private function loadBladeDirectives(): void
    {
        Blade::if('olark', function () {
            return app("olark")->isEnabled();
        });

        Blade::directive('olarkWidget', function () {
            return '<?php echo app("olark")->getWidget(); ?>';
        });
    }
}
