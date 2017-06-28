<?php

namespace Rdpascua\Identicon;

use Illuminate\Foundation\Application;
use Illuminate\Support\ServiceProvider;

class IdenticonServiceProvider extends ServiceProvider
{
	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

    /**
     * Register to service provider
     *
     * @return [type] [description]
     */
    public function register()
    {
        $method = version_compare(Application::VERSION, '5.2', '>=') ? 'singleton' : 'bindShared';

        $this->app->$method('identicon', function($app) {
            return new Identicon;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['identicon'];
    }
}
