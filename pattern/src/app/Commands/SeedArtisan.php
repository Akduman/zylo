<?php


namespace Zylo\Pattern\App\Commands;
use Zylo\Pattern\App\Commands\BaseArtisan;
use Zylo\Pattern\Database\Seeders\DatabaseSeeder;

class SeedArtisan extends BaseArtisan
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:Seed';

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
      //  $database=new DatabaseSeeder();
        $this->info('Seeding is processing');
     //   $database->run();  

        return 0;
    }
}