<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		DB::table("testimonials")->insert([
			'name' => 'Catherine Walk',
			'post' => 'CEO Founder',
			'description' => 'Praesent accumsan condimentum arcu, id porttitor est semper nec. Nunc diam lorem.',
			'approved' => true,
			
		]);
		DB::table("testimonials")->insert([
			'name' => 'David Martin',
			'post' => 'CTO of Tech Company',
			'description' => 'Praesent accumsan condimentum arcu, id porttitor est semper nec. Nunc diam lorem.',
			'approved' => true,
			
		]);
		DB::table("testimonials")->insert([
			'name' => 'Sophia Whity',
			'post' => 'CEO and Co-Founder',
			'description' => 'Praesent accumsan condimentum arcu, id porttitor est semper nec. Nunc diam lorem.',
			'approved' => true,
			
		]);
		DB::table("testimonials")->insert([
			'name' => 'Helen Shiny',
			'post' => 'Tech Officer',
			'description' => 'Praesent accumsan condimentum arcu, id porttitor est semper nec. Nunc diam lorem.',
			'approved' => true,
			
		]);
		DB::table("testimonials")->insert([
			'name' => 'George Soft',
			'post' => 'Gadget Reviewer',
			'description' => 'Praesent accumsan condimentum arcu, id porttitor est semper nec. Nunc diam lorem.',
			'approved' => true,
			
		]);
		DB::table("testimonials")->insert([
			'name' => 'Andrew Hall',
			'post' => 'Marketing Manager',
			'description' => 'Praesent accumsan condimentum arcu, id porttitor est semper nec. Nunc diam lorem.',
			'approved' => true,
			
		]);
		DB::table("testimonials")->insert([
			'name' => 'Maxi Power',
			'post' => 'Fashion Designer',
			'description' => 'Praesent accumsan condimentum arcu, id porttitor est semper nec. Nunc diam lorem.',
			'approved' => true,
			
		]);
		DB::table("testimonials")->insert([
			'name' => 'Maxi Power',
			'post' => 'Fashion Designer',
			'description' => 'Praesent accumsan condimentum arcu, id porttitor est semper nec. Nunc diam lorem.',
			'approved' => true,
			
		]);
    }
}
