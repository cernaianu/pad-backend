<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Jobs\AdminAdded;
class FireEventCommand extends Command
{
 
    protected $signature = 'fire';
    public function handle()
    {
        AdminAdded::dispatch('a@a.com');
    }
}
