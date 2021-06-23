<?php

namespace Abrardev99\LaravelPackageLearning;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Abrardev99\LaravelPackageLearning\Commands\LaravelPackageLearningCommand;

class LaravelPackageLearningServiceProvider extends PackageServiceProvider
{
    public function boot()
    {
        dd('dd');
    }
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-package-learning')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-package-learning_table')
            ->hasCommand(LaravelPackageLearningCommand::class);
    }
}
