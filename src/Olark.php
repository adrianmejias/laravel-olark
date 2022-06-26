<?php

declare(strict_types=1);

namespace AdrianMejias\Olark;

use AdrianMejias\Olark\Exceptions\OlarkDisabledException;
use AdrianMejias\Olark\Exceptions\OlarkSiteIdException;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Support\Facades\Lang;

/**
 * Olark Class
 *
 * @package AdrianMejias\Olark
 */
class Olark implements \AdrianMejias\Olark\Contracts\OlarkContract
{
    /**
     * The application instance.
     *
     * @var \Illuminate\Contracts\Foundation\Application
     */
    protected $app;

    /**
     * Initialize Olark with application instance.
     *
     * @param \Illuminate\Contracts\Foundation\Application $app
     */
    public function __construct(Application $app)
    {
        $this->setApplication($app);
    }

    /**
     * Set the application instance.
     *
     * @param \Illuminate\Contracts\Foundation\Application $app
     * @return $this
     */
    public function setApplication(Application $app): self
    {
        $this->app = $app;

        return $this;
    }

    /**
     * Set the Olark site id.
     *
     * @param string $siteId
     * @return $this
     */
    public function setSiteId(string $siteId): self
    {
        config()->set('olark.site_id', $siteId);

        return $this;
    }

    /**
     * Get the Olark site id.
     *
     * @return string
     */
    public function getSiteId(): string
    {
        return config('olark.site_id', '');
    }

    /**
     * Enable Olark.
     *
     * @return $this
     */
    public function enable()
    {
        config()->set('olark.enable', true);

        return $this;
    }

    /**
     * Disable Olark.
     *
     * @return $this
     */
    public function disable()
    {
        config()->set('olark.enable', false);

        return $this;
    }

    /**
     * Returns whether Olark is enabled.
     *
     * @return bool
     */
    public function isEnabled(): bool
    {
        return config('olark.enable', false) === true;
    }

    /**
     * Returns whether Olark is disabled.
     *
     * @return bool
     */
    public function isDisabled(): bool
    {
        return config('olark.enable', false) === false;
    }

    /**
     * Get the Olark widget code.
     *
     * @return string
     */
    public function getWidget(): string
    {
        $siteId = $this->getSiteId();

        if (empty($siteId)) {
            throw new OlarkSiteIdException(
                Lang::get('olark::olark.site_id')
            );
        }

        if (! $this->isEnabled()) {
            throw new OlarkDisabledException(
                Lang::get('olark::olark.disabled')
            );
        }

        return app('view')->make('olark::widget')->render();
    }
}
