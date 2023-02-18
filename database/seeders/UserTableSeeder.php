<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'admin',
            'mobile'=>'01923495867',
            'email'=>'admin@gmail.com',
            'password'=>bcrypt('12345'),
            'role_id'=>1,
            
        ]);
      User::factory()->count(50)->create();
       
    }
}
