<?php

namespace Zylo\Pattern\App\Commands;

use Illuminate\Console\Command;

class ControllerArtisan extends BaseArtisan
{

    protected $stubs=[
        "packages\zylo\pattern\src\stubs\Controller.model.api.stub"
    ];

    protected $old_params=[0=>'{{model}}'];
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:Controller {name}';

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
        $result=$this->create_file($this->controller_path,"{$this->argument('name')}Controller");
        if ($result!=false) 
        {
           $this->swap_information($result,$this->stubs[0],$this->old_params,$this->ConvertNewParams());
        }

        return 0;
    }
}
