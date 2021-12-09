<?php

namespace Kakadigi\Florence\Components;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class FlorenceServiceProvider extends ServiceProvider
{
    /** @var string */
    private const CONFIG_FILE = __DIR__ . '/../config/florence.php';

    /** @var string */
    private const PATH_VIEWS = __DIR__ . '/../resources/views';

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot(): void
    {
        if (function_exists('config_path')) { // function not available and 'publish' not relevant in Lumen
            $this->publishes([
                self::CONFIG_FILE => config_path('florence.php'),
            ], 'config');
        }

        $this->loadViewsFrom(self::PATH_VIEWS, 'kd-florence-components');

        $this
            ->registerComponents()
            ->registerComponentsPublishers();
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->mergeConfigFrom(self::CONFIG_FILE, 'florence');
    }

    /**
     * Register the Blade form components.
     *
     * @return $this
     */
    private function registerComponents(): self
    {
        // Blade::componentNamespace('Kakadigi\\Florence\\Components\\View\\Components\\Navigation', config('florence.prefix.navigation'));
        return $this;
    }

    /**
     * Register the publishers of the component resources.
     *
     * @return $this
     */
    public function registerComponentsPublishers(): self
    {
        $this->publishes([
            self::PATH_VIEWS => resource_path('views/vendor/kd-florence-components'),
        ], 'components');

        //$this->publishes([
          //  self::PATH_VIEWS . '/form' => resource_path('views/vendor/kd-florence-components/form'),
        //], 'form-components');

        return $this;
    }
}
