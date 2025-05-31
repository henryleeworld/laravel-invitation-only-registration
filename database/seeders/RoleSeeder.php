<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeders.
     */
    public function run(): void
    {
        DB::table('roles')->insert([
            'name' => 'Administrator'
        ]);

        DB::table('roles')->insert([
            'name' => 'User'
        ]);
    }
}
