<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Nicola',
            'email' => 'Nicola@molengeek.be',
            'password' => Hash::make('123456'),
            'role_id' => 1,
        ]);
        DB::table('users')->insert([
            'name' => 'Akira',
            'email' => 'Akira@molengeek.be',
            'password' => Hash::make('123456'),
            'role_id' => 1,
        ]);
    }
}