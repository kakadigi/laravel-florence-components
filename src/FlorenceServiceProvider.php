<?php

namespace Kakadigi\FlorenceComponent;

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

        $this->loadViewsFrom(self::PATH_VIEWS, 'kd-florence');

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
     * Register the Blade page components.
     *
     * @return $this
     */
    private function registerComponents(): self
    {
        Blade::componentNamespace('Kakadigi\\FlorenceComponent\\View\\Components\\Page', config('florence.prefix.page'));
        Blade::componentNamespace('Kakadigi\\FlorenceComponent\\View\\Components\\Grid', 'grid');
        Blade::componentNamespace('Kakadigi\\FlorenceComponent\\View\\Components\\Kanban', 'kanban');
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
            self::PATH_VIEWS => resource_path(config('florence.view.path')),
        ], 'components');

        return $this;
    }
}
