<?php

namespace Zylo\Pattern\App\Commands;


use Zylo\Pattern\ZyloServiceProvider;

class BaseRepositoryArtisan extends BaseArtisan
{

    protected $stubs=[
        "packages\zylo\pattern\src\stubs\BaseRepository.stub",
        "packages\zylo\pattern\src\stubs\IEloquentRepository.stub",
    ];
    
    protected function ConvertNewParams()
    {
        $parameter=$this->arguments();
        foreach ($parameter as $value) {
            $i=0;
            $new_params=[$i => $value];
            $i++;
        }
        return $new_params;
    }

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:BaseRepository';

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
      //  $path=  ZyloServiceProvider::package_path();
        $result=$this->create_file($this->repository_path,"BaseRepository");
        if ($result!=false) 
        {
           $this->swap_information($result,$this->stubs[0]);
        }
        $result=$this->create_file($this->Interface_path,"IEloquentRepository");
        if ($result!=false) 
        {
           $this->swap_information($result,$this->stubs[1]);

        }
        
        

        

        return 0;
    }
}
