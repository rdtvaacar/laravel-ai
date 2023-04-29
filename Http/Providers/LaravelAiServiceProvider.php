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

    }

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        // Paketin rotalarını yüklemek için loadRoutesFrom() kullanıyoruz.
        $this->loadRoutesFrom(__DIR__ . '/../../routes.php');

        // Paketin migrasyonlarını yüklemek için loadMigrationsFrom() kullanıyoruz.
        $this->loadMigrationsFrom(__DIR__ . '/../../migrations');

        // Paketin görünümlerine erişim sağlamak için namespace tanımlıyoruz.
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'laravel-ai');

    }

}