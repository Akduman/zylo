<?php

namespace Zylo\Pattern\App\Commands;


use Zylo\Pattern\ZyloServiceProvider;

class ModelRepositoryArtisan extends BaseArtisan
{

    /***
     * 
     * Here is the stubs paths.
     */
    protected $stubs=[
        "packages\zylo\pattern\src\stubs\ModelRepository.stub",
        "packages\zylo\pattern\src\stubs\IModelRepository.stub",
    ];

    protected $old_params=[0=>'{{model}}'];


    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:ModelRepository {name}';

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


  
        $result=$this->create_file($this->repository_path,"{$this->argument('name')}Repository");
        if ($result!=false) 
        {
           $this->swap_information($result,$this->stubs[0],$this->old_params,$this->ConvertNewParams());
        }

        $result=$this->create_file($this->Interface_path,"I{$this->argument('name')}Repository");
        if ($result!=false) 
        {
           $this->swap_information($result,$this->stubs[1],$this->old_params,$this->ConvertNewParams());

        }
        return 0;
    }
}
