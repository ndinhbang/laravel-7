<?php

namespace App\Mixins;

class ArrayMixin
{
    /**
     * Conditionally compile classes from an array into a CSS class list.
     *
     * @return string
     */
    public static function toCssClasses()
    {
        return function ($array) {
            $classList = static::wrap($array);

            $classes = [];

            foreach ($classList as $class => $constraint) {
                if (is_numeric($class)) {
                    $classes[] = $constraint;
                } elseif ($constraint) {
                    $classes[] = $class;
                }
            }

            return implode(' ', $classes);
        };
    }
}