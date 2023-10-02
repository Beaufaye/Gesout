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
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'BAOUROU Beaufaye',
            'email' => 'baouroubeaufaye881@gmail.com',
            'password' => Hash::make('benben'),
        ]);

        DB::table('users')->insert([
            'name' => 'DAOUDA Ulrich',
            'email' => 'ulrich@gmail.com',
            'password' => Hash::make('ulrich'),
        ]);

        DB::table('users')->insert([
            'name' => 'KENNEDY',
            'email' => 'kennedy@gmail.com',
            'password' => Hash::make('kennedy'),
        ]);
    }
}
