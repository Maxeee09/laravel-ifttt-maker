<?php namespace Maxeee09\IFTTT\Maker\Providers;

use Illuminate\Support\ServiceProvider;
use Maxeee09\IFTTT\Maker\Contracts\GuzzleIFTTTMakerHTTPClient;
use Maxeee09\IFTTT\Maker\Contracts\IFTTTMakerHTTPClientContract;
use Maxeee09\IFTTT\Maker\Facades\IFTTTMaker;
use Maxeee09\IFTTT\Maker\Managers\IFTTTMakerManager;

class IFTTTMakerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../../config/ifttt-maker.php' => config_path('ifttt-maker.php'),
        ], 'config');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        // Register HTTP Client
        $this->app->singleton(IFTTTMakerHTTPClientContract::class, function ($app) {
            return new GuzzleIFTTTMakerHTTPClient(config('ifttt-maker'));
        });

        // Register Manager
        $this->app->singleton(IFTTTMaker::FACADE_ACCESSOR, function ($app) {
            return $app->make(IFTTTMakerManager::class);
        });

        // Require helpers
        require __DIR__ . '/../../helpers/ifttt-maker.php';
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [IFTTTMaker::FACADE_ACCESSOR];
    }
}