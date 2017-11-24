<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Validator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
   
        //ajuste para lidar com MySQL antigo
        Schema::defaultStringLength(191);
        //validador
        Validator::extend('greaterthan', function($attribute, $value, $parameters, $validator) {
            $field = $parameters[0];
            $data = $validator->getData();
            $minvalue = $data[$field];
            return $value > $minvalue;
        });
        
        Validator::extend('numericbr', function($attribute, $value, $parameters, $validator) {
            $regex = '/^\d*([\,\.]{1}\d{0,12})?$/';
            return preg_match($regex, $value);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
