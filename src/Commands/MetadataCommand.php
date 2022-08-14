<?php

namespace Finller\Metadata\Commands;

use Illuminate\Console\Command;

class MetadataCommand extends Command
{
    public $signature = 'laravel-model-metadata';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
