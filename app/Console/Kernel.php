<?php

namespace App\Console;

use App\Events\SpinEvent;
use App\Services\Services\Spin\SpinService;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Support\Carbon;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        $schedule
            ->call(fn() => print("_"))
            ->everySecond();

        $schedule
            ->call(function (){
                print("Spinning The Wheel");
                $spinService = new SpinService();
                $spinService->spin();
            })
            ->everyMinute();
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}