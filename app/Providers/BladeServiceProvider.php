<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class BladeServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        /**
         * Compile the conditional class statement into valid PHP.
         *
         * @param  string  $expression
         * @return string
         */
        Blade::directive('class', function ($expression) {
            $expression = is_null($expression) ? '([])' : $expression;

            return "class=\"<?php echo \Illuminate\Support\Arr::toCssClasses{$expression} ?>\"";
        });
    }
}
