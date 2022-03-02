<?php

namespace App\Mixins;

use Illuminate\Support\Arr;

class ComponentAttributeBagMixin
{
    /**
     * Conditionally merge classes into the attribute bag.
     */
    public function class()
    {
        /**
         * @param  mixed|array  $classList
         * @return \Illuminate\View\ComponentAttributeBag
         */
        return function ($classList) {
            $classList = Arr::wrap($classList);

            return $this->merge(['class' => Arr::toCssClasses($classList)]);
        };

    }
}