<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name'=>'admin',
            'status'=>'active',
        ]);
        Role::create([
            'name'=>'customer',
            'status'=>'active',
        ]);
        Role::create([
            'name'=>'manager',
            'status'=>'active',
        ]);
    }
}
