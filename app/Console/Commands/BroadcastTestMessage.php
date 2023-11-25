<?php

namespace App\Console\Commands;

use App\Events\SpinEvent;
use App\Services\Services\Spin\SpinService;
use Illuminate\Console\Command;

class BroadcastTestMessage extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'bcast';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Broadcast message to connected clients';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $spinService = new SpinService();
        print('Broadcast message to connected clients');
        $spinService->spin();
    }
}
