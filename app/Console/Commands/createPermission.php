<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Permission;
use Illuminate\Support\Facades\Route;
class createPermission extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:permission';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create route permission for role';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        //variable=facade::method
        $allroutes=Route::getRoutes();

        foreach($allroutes as $route){
            if($route->getPrefix()=='/admin'){
                Permission::updateOrCreate([
                    'name'=>$route->getName(),
                ]);
            }
        }
        echo "All permissions created successfully";
        return 0;
    }
}
