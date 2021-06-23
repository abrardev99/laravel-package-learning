<?php

namespace Abrardev99\LaravelPackageLearning\Commands;

use Illuminate\Console\Command;

class LaravelPackageLearningCommand extends Command
{
    public $signature = 'laravel-package-learning';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
