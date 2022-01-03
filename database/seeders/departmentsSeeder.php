<?php

namespace Database\Seeders;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class departmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departments')->insert([
            'dep_name'=>'Cardiology',
            'dep_description'  => 'Cardiology is the study and treatment of disorders of the heart and the blood vessels',
        ]);
    }
}
