<?php

namespace Weward\Summoner\Commands;

use Illuminate\Console\Command;

class SummonerCommand extends Command
{
    public $signature = 'manual:job {job} {--param=*} {--queue=}';

    public $description = 'Manual execution of Jobs';

    public function handle(): mixed
    {
        $this->comment('Trigger that Job!');

        $job = "\App\Jobs\\{$this->argument('job')}";
        // @array
        $params = $this->option('param');
        // @string
        $queue = $this->option('queue');

        if ($queue) {
            $job::dispatch(...$params)->onQueue($queue);
            $this->info("{$job} wasa successfully dispatched on {$queue} queue!");
            return null;
        }

        $job::dispatch(...$params);
        $this->info('{$job} wasa successfully dispatched!');

        return self::SUCCESS;
    }
}
