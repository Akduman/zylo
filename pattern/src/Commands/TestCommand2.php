<?php

namespace Zylo\Pattern\Commands;

use Illuminate\Console\Command;

class TestCommand2 extends Command
{
    public function path()
    {
        return __DIR__;
    }
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:name2';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        echo "command name 222222";
        return 0;
    }
}
