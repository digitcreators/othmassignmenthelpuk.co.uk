<?php

namespace App\Providers;

use App\Http\Resources\Api\OrderResource;
use Illuminate\Support\ServiceProvider;
use App\Http\View\Composers\LayoutComposer;
use Illuminate\Bus\Dispatcher;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Dispatcher $events)
    {
       OrderResource::withoutWrapping();

        View::composer('layouts.web', LayoutComposer::class);
    }
}
