<?php

namespace App\Providers;

use App\Repositories\StudentRepositoryInterface;
use Illuminate\Support\ServiceProvider;
use StudentEloquentORM;

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
