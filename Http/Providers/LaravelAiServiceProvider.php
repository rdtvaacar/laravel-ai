<?php

namespace Rdtvaacar\LaravelAi\Http\Providers;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class LaravelAiServiceProvider extends BaseServiceProvider
{
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(FileManager::class, function () {
            return new FileManager();
        });
    }

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '../../resources/views' => resource_path('ai'),
        ], 'ai-views');

        // Bu kısım, paketin arayüzünü kullanmak için kendi route dosyanızı oluşturmanızı sağlar.
        $this->loadRoutesFrom(__DIR__ . '../../routes.php');
        $this->loadViewsFrom(__DIR__ . '../../resources/views', 'ai');
        $this->publishes([
            __DIR__ . '../../resources/views' => resource_path('views/vendor/ai'),
        ]);
    }
}