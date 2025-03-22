<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('reigistertions')->insert([
            'firstname' => 'Admin',
            'lastname' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('admin123'),
            'phone' => '1234567890',
            'role' => 'admin', 
        ]);
    }
}
