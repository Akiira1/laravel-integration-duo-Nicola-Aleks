<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MapSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //50,855409, 4,341261
		DB::table("maps")->insert([
            'name' => 'Rue de la minoterie 10',
            'phone' => '010-020-0340',
            'mobile' => '090-080-0760',
		]);
    }
}
