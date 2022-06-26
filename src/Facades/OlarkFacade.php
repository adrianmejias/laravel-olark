<?php

declare(strict_types=1);

namespace AdrianMejias\Olark\Facades;

/**
 * Routing Numbers Facade
 *
 * @package AdrianMejias\Olark\Facades
 * @method static string getSiteId()
 * @method static \AdrianMejias\Olark\Olark setSiteId(string $siteId)
 * @method static \AdrianMejias\Olark\Olark enable()
 * @method static \AdrianMejias\Olark\Olark disable()
 * @method static bool isEnabled()
 * @method static bool isDisabled()
 * @method static string getWidget()
 */
class OlarkFacade extends \Illuminate\Support\Facades\Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'olark';
    }
}
