<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB:table('users')->insert([
            'name' =>str::random(10),
            'email'=>str::random(10). '@example.com',
            'password'=>Hash::make('password'),
        ]);
    }
}
