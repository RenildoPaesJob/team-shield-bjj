<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\{PaymentEloquentORM, PaymentRepositoryInterface};
use App\Repositories\{StudentRepositoryInterface, StudentEloquentORM};

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

		$this->app->bind(
			PaymentRepositoryInterface::class,
			PaymentEloquentORM::class
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
