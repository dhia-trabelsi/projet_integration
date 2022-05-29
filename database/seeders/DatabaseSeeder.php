<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\publisher::factory(5)->create();
        \App\Models\author::factory(5)->create();
        DB::table('admins') -> insert(
            [
                'email' => 'dhia@gmail.com',
                'nom' => 'dhia',
                'password' => Hash::make('123456')
            ]
        );
    }
}
