<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\EmailRepository;
use App\Repositories\EmailRepositoryInterface;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(EmailRepositoryInterface::class, EmailRepository::class);
    }

    public function boot()
    {
        //
    }
}
