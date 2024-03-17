<?php

namespace Ajellender\Menus\Commands;

use Illuminate\Console\Command;

class MenusCommand extends Command
{
    public $signature = 'laravel-menus';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
