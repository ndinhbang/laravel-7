<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Arr;
use Illuminate\View\ComponentAttributeBag;

class MacrosServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap services.
     *
     * @return void
     * @throws \ReflectionException
     */
    public function boot()
    {
        Arr::mixin(new \App\Mixins\ArrayMixin, false);
        ComponentAttributeBag::mixin(new \App\Mixins\ComponentAttributeBagMixin, false);
    }
}
