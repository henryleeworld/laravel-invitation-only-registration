<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeders.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name'          => __('Administrator'),
            'email'         => 'admin@admin.com',
            'password'      => Hash::make('password'),
            'role_id'       => 1,
            'created_at'    => Carbon::now()
        ]);
    }
}
