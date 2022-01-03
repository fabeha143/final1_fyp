<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class employee_infosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employee_infos')->insert([
            'username'=>'admin',
            'email'  => 'fabehanaqvi7@gmail.com',
            'password' =>  bcrypt('admin123'),
            'role_id' =>'admin'
        ]);
    }
}
