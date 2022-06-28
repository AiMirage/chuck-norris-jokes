<?php

namespace AiMirage\ChuckNorrisJokes\Console;

use AiMirage\ChuckNorrisJokes\Facades\ChuckNorris;
use Illuminate\Console\Command;

class ChuckNorrisJoke extends Command
{
    // How u will call this command from command-line
    protected $signature = 'chuck-norris';

    protected $description = 'Output a chuck norris joke';

    function handle()
    {
        $this->info(ChuckNorris::getRandomJoke());
    }
}