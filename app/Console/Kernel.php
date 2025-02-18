<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    protected $commands = [
        \App\Console\Commands\SendEmails::class,
    ];

    protected function schedule(Schedule $schedule)
    {
        $schedule->command('emails:send')->everyMinute();
    }

    protected function commands()
    {
        require base_path('routes/console.php');
    }
}

