<?php

namespace Database\Seeders;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class medicines_categoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('medicines_categories')->insert([
            'med_cat_name'=>'Pain Killer',
            'med_cat_description'  => 'Compound painkillers are made from a combination of two different drugs.',
        ]);
    }
}
