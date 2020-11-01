<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Anil',
            'email' => 'anil@gmail.com',
            'password' => Hash::make('anil')
        ]);
        DB::table('users')->insert([
            'name' => 'Rohim',
            'email' => 'rohim@gmail.com',
            'password' => Hash::make('rohim')
        ]);
        DB::table('users')->insert([
            'name' => 'Atik',
            'email' => 'atik@gmail.com',
            'password' => Hash::make('atik')
        ]);
    }
}
