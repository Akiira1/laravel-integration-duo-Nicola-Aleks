<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		DB::table("services")->insert([
			'icone' => 'img/service-icon-01.png',
			'title' => 'Useful Tricks',
			'description' => '',
		]);
		DB::table("services")->insert([
			'icone' => 'img/service-icon-02.png',
			'title' => 'Creative Ideas',
			'description' => '',
		]);
		DB::table("services")->insert([
			'icone' => 'img/service-icon-03.png',
			'title' => 'Ready Target',
			'description' => '',
		]);
		DB::table("services")->insert([
			'icone' => 'img/service-icon-04.png',
			'title' => 'Technology',
			'description' => '',
		]);
		DB::table("services")->insert([
			'icone' => 'img/service-icon-01.png',
			'title' => 'Useful Tricks',
			'description' => '',
		]);
		DB::table("services")->insert([
			'icone' => 'img/service-icon-02.png',
			'title' => 'Creative Ideas',
			'description' => '',
		]);
		DB::table("services")->insert([
			'icone' => 'img/service-icon-03.png',
			'title' => 'Ready Target',
			'description' => '',
		]);
		DB::table("services")->insert([
			'icone' => 'img/service-icon-04.png',
			'title' => 'Technology',
			'description' => '',
		]);
		DB::table("services")->insert([
			'icone' => 'img/service-icon-01.png',
			'title' => 'Useful Tricks',
			'description' => '',
		]);
		DB::table("services")->insert([
			'icone' => 'img/service-icon-02.png',
			'title' => 'Creative Ideas',
			'description' => '',
		]);
		DB::table("services")->insert([
			'icone' => 'img/service-icon-03.png',
			'title' => 'Ready Target',
			'description' => '',
		]);
		DB::table("services")->insert([
			'icone' => 'img/service-icon-04.png',
			'title' => 'Technology',
			'description' => '',
		]);
    }
}
