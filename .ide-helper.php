<?php

declare(strict_types=1);

// @formatter:off
// phpcs:ignoreFile

/**
 * A helper file for Laravel, to provide autocomplete information to your IDE.
 *
 * This file should not be included in your code, only analyzed by your IDE.
 */

class Olark extends \AdrianMejias\Olark\Facades\OlarkFacade { }
class OlarkFacade extends \AdrianMejias\Olark\Olark { }
class OlarkException extends \Exception { }
class OlarkSiteIdException extends \AdrianMejias\Olark\Exceptions\OlarkSiteIdException { }
class OlarkDisabledException extends \AdrianMejias\Olark\Exceptions\OlarkDisabledException {}
class OlarkServiceProvider extends \Illuminate\Support\ServiceProvider { }
