<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\{StudentRepositoryInterface};
use App\Repositories\{StudentEloquentORM};

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(
			StudentRepositoryInterface::class,
			StudentEloquentORM::class
		);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
