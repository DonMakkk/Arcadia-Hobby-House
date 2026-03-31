<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
     User::firstOrCreate(
    ['email' => 'admin@email.com'], // condition
    [
        'first_name' => 'admin',
        'last_name' => 'admin',
        'phone_num' => '111111',
        'password' => Hash::make('defaultpassword'),
        'role' => 'admin'
    ]
);
    }
}
