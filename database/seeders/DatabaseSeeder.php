<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

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
        // \App\Models\User::factory(10)->create();
        
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'Admin@Admin.com',
            'password' => Hash::Make("1234567890"),
            'status' => 'admin',
         ]);
    }
}
