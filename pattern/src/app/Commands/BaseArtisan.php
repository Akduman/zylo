<?php

namespace Zylo\Pattern\App\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class BaseArtisan extends Command
{

    protected $repository_path="packages\zylo\pattern\src\app\Repositories\\";
    protected $Interface_path="packages\zylo\pattern\src\app\Interfaces\\";
    protected $model_path="packages\zylo\pattern\src\app\Models\\";
    protected $controller_path="packages\zylo\pattern\src\app\Controllers\API\\";
    protected $requestStore_path="packages\zylo\pattern\src\app\Request\\";
    protected $migration_path="packages\zylo\pattern\src\database\migrations\\";
    protected $factory_path="packages\zylo\pattern\src\database\\factories\\";
    protected $resoruce_path="packages\zylo\pattern\src\app\Resource\\";
    /**
     * The name and signature of the console command.
     *
     * @var string
     */

    protected function create_file($Folder_path, $php_file_name)
    {

        $this->info("Checking files...");
        
        if(!file_exists($Folder_path)) 
        {
           $create_file = mkdir($Folder_path);

            if($create_file){
                $this->info($Folder_path.' ==> '.'Folder has Created Successfully!');                
            }
            else 
            {
                $this->error($Folder_path.' ==>  '.'Something Went Wrong!');
                return false;
            }
        }
        else
        {
            $this->info($Folder_path.' ==>  '."Already Exist!");
        }

        $create_file=$Folder_path.$php_file_name.".php";
        if(!file_exists($create_file)) 
        {
           $result = touch($create_file);

            if($result)
            {
                $this->info($create_file.' ==> '.'File Created Successfully!');  
                return $create_file;            
            }
            else 
            {
                $this->error($create_file.' ==>  '.'Something went wrong!');
                return false;
            }
        }
        else
        {
            $this->info($create_file.' ==>  '."Already Exist!");         
        }



    }
   


    protected function ConvertNewParams()
    {
        $parameter=$this->arguments();
         
     //   $array = Arr::add($array,0,2);
        $new_params=[];
        $i=0;
        foreach ($parameter as $value) {  
            $new_params = Arr::add($new_params,$i,$value);
            $i++;
        }
        return $new_params;
    }

    protected function swap_information($File_path,$Stub_file,$old_params=null,$new_params=null)
    {
        $content = file_get_contents($Stub_file);      
        if ( $old_params!=null && $new_params!=null) {            
           for ($i=0; $i <count($old_params); $i++) {

             $content=str_replace($old_params[$i], $new_params[$i+1],$content);
           }
        }       
        file_put_contents($File_path, $content); 
        $this->info($File_path." ==> "."Swapping has completed!");
    }

    protected function CallTableColms($model_name){
        $tableColums = DB::getSchemaBuilder()->getColumnListing($model_name."s");
        return $tableColums; 
    }

    protected function ContvertColums($tableColums){
        $querry="";
        foreach ($tableColums as $value) {
            $querry = $querry . " '{$value}' => 'Required',\n \t \t \t";
        }
        return $querry;
    }


    protected function ConvertToResoruce($tableColums){
        $querry="";
        foreach ($tableColums as $value) {
            $querry = $querry . " '{$value}' => \$this->{$value},\n \t \t \t";
        }
        return $querry;
    }




    protected $signature = '';

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
        echo "command name 1";
        
        return 0;
    }
}
