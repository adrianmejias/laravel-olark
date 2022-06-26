<?php

declare(strict_types=1);

namespace AdrianMejias\Olark\Contracts;

use Illuminate\Contracts\Foundation\Application;

/**
 * Olark Contract
 *
 * @package AdrianMejias\Olark\Contracts
 */
interface OlarkContract
{
    /**
     * Initialize Olark with application instance.
     *
     * @param \Illuminate\Contracts\Foundation\Application $app
     */
    public function __construct(Application $app);

    /**
     * Set the application instance.
     *
     * @param \Illuminate\Contracts\Foundation\Application $app
     * @return $this
     */
    public function setApplication(Application $app);

    /**
     * Set the Olark site id.
     *
     * @param string $siteId
     * @return $this
     */
    public function setSiteId(string $siteId);

    /**
     * Get the Olark site id.
     *
     * @return string
     */
    public function getSiteId(): string;

    /**
     * Enable Olark.
     *
     * @return $this
     */
    public function enable();

    /**
     * Disable Olark.
     *
     * @return $this
     */
    public function disable();

    /**
     * Returns whether Olark is enabled.
     *
     * @return bool
     */
    public function isEnabled(): bool;

    /**
     * Returns whether Olark is disabled.
     *
     * @return bool
     */
    public function isDisabled(): bool;

    /**
     * Get the Olark widget code.
     *
     * @return string
     */
    public function getWidget(): string;
}
