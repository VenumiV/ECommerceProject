<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Auth\Events\Login;
use Illuminate\Auth\Events\Failed;
use App\Listeners\LogSuccessfulLogin;
use App\Listeners\LogFailedLogin;


class AppServiceProvider extends ServiceProvider
{

     protected $listen = [
    Login::class => [
        LogSuccessfulLogin::class,
    ],
    Failed::class => [
        LogFailedLogin::class,
    ],
]; 
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }

  
}
