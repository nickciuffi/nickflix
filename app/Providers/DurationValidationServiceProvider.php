<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;

class DurationValidationServiceProvider extends ServiceProvider
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
        Validator::extend('hours_and_minutes', function ($attribute, $value, $parameters, $validator) {
            // Check if the value matches the 'hours:minutes' format (e.g., 01:30)
            return preg_match('/^(0[0-9]|1[0-9]|2[0-3]):[0-5][0-9]$/', $value);
        });

        // You can also provide a custom error message for this validation rule
        Validator::replacer('hours_and_minutes', function ($message, $attribute, $rule, $parameters) {
            return str_replace(':attribute', $attribute, 'A duração deve estar no formato (Horas:Minutos).');
        });
    }
}
