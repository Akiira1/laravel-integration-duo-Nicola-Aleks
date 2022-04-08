<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		DB::table("titles")->insert([
			'title' => 'Welcome To Our School',
			'subtitle' => 'Best Place To Learn Graphic [Design!]',
		]);
        DB::table("titles")->insert([
			'title' => 'OUR SERVICES',
			'subtitle' => 'Provided Services',
		]);
        DB::table("titles")->insert([
			'title' => 'OUR COURSES',
			'subtitle' => 'What You Can Learn',
		]);
        DB::table("titles")->insert([
			'title' => 'TESTIMONIALS',
			'subtitle' => 'What They Think',
		]);
        DB::table("titles")->insert([
			'title' => 'Welcome To Our School',
			'subtitle' => 'Best Place To Learn Graphic Design!',
		]);
        DB::table("titles")->insert([
			'title' => 'Welcome To Our School',
			'subtitle' => 'Best Place To Learn Graphic Design!',
		]);
        DB::table("titles")->insert([
			'title' => 'Welcome To Our School',
			'subtitle' => 'Best Place To Learn Graphic Design!',
		]);
    }
}
