<?php

namespace DearPOS\DearPOSCore\Commands;

use Illuminate\Console\Command;

class DearPOSCoreCommand extends Command
{
    public $signature = 'dearpos-core';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
