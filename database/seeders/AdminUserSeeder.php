<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@exemplo.com',
            'phone_number' => '00000000000',
            'password' => Hash::make('senha123'),
            'role' => 'admin',

            // salt email verification
            'email_verified_at' => now(),
        ]);
    }
}
