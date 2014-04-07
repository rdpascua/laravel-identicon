<?php namespace Rdpascua\Identicon;

use Illuminate\Support\ServiceProvider;

class IdenticonServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

    /**
     * Boot the application
     *
     * @return [type] [description]
     */
    public function boot()
    {
        $this->package('rdpascua/laravel-identicon');
    }

    /**
     * Register to service provider
     *
     * @return [type] [description]
     */
    public function register()
    {
        $this->app['identicon'] = $this->app->share(function($app)
        {
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
        return array('identicon');
    }
}
