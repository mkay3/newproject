<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use App\Repositories\Todo\EloquentRepository;
use Illuminate\Support\ServiceProvider;
use App\Repositories\Todo\TodoInterface;
use App\Repositories\Blog\BlogInterface;
use App\Repositories\Blog\BlogRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(TodoInterface::class, EloquentRepository::class);
        $this->app->singleton(BlogInterface::class, BlogRepository::class);
    }

}
