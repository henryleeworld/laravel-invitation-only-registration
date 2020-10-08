<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'          => 'Administrator',
            'email'         => 'admin@admin.com',
            'password'      => bcrypt('password'),
            'role_id'       => 1,
            'created_at'    => Carbon::now()
        ]);
    }
}
