<?php

namespace Abrardev99\LaravelPackageLearning;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Abrardev99\LaravelPackageLearning\LaravelPackageLearning
 */
class LaravelPackageLearningFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-package-learning';
    }
}
