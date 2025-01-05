<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SendEmails extends Command
{
    protected $signature = 'app:send-emails';

    protected $description = 'Command de teste';

    public function handle()
    {
        echo shell_exec('./vendor/bin/pint');
    }
}
