<?php

namespace Database\Seeders;
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
       $admin_id = DB::table('users')->insert([
            'name' => 'Beaufaye',
            'password' => Hash::make('benben'),
            'roles_id' => 3,
        ]);

       $secr_id = DB::table('users')->insert([
            'name' => 'Ulrich',
            'password' => Hash::make('ulrich'),
            'roles_id' => 1,
        ]);

        DB::table('users')->insert([
            'name' => 'Kennedy',
            'password' => Hash::make('kennedy'),
            'roles_id' => 2,
        ]);
    }
}
