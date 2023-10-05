<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->insert([
            'role'=> 'Secretaire',
        ]);

        DB::table('roles')->insert([
            'role'=> 'Agent',
        ]);

        DB::table('roles')->insert([
            'role'=> 'Administrateur',
        ]);
    }
}
