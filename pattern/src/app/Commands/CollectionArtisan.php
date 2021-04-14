<?php 

namespace Zylo\Pattern\App\Commands;

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Zylo\Pattern\App\Models\Post;

class CollectionArtisan extends BaseArtisan
{

    /***
     * 
     * Here is the stubs paths.
     */
    protected $stubs=[
        "packages\zylo\pattern\src\stubs\Collection.stub"
    ];

    protected $old_params=[0=>'{{model}}'];


    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:collection {name}';

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

        $result=$this->create_file($this->resoruce_path,$this->argument('name').'Collection');
        if ($result!=false) 
        {
           $this->swap_information($result,$this->stubs[0],$this->old_params,$this->ConvertNewParams());
        }


        return 0;
    }
}

