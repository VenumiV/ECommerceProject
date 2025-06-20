<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class LogFailedLogin
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(object $event): void
    {
          Log::channel('loginlog')->warning('Failed login attempt', [
            'email' => $event->credentials['email'],
            'ip' => request()->ip(),
            'user_agent' => request()->userAgent(),
            'time' => now(),
        ]);
    }
}
