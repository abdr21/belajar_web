<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //clear existing users
        \App\Models\User::truncate();

        // Create an admin user with predefined credentials
        // You can change the name, email, and password as needed
        $data = [
            [
                'name' => 'Admin',
                'email' => 'suyuthiabdullah71@gmail.com',
                'password' => \Illuminate\Support\Facades\Hash::make('123')
            ],
            [
                'name' => 'Admin2',
                'email' => 'abdurrohmanmgt21@gmail.com',
                'password' => \Illuminate\Support\Facades\Hash::make('123')
            ]
        ];

        foreach ($data as $user) {
            \App\Models\User::create([
                'name' => $user['name'],
                'email' => $user['email'],
                'password' => $user['password']
            ]);
        }
    }
}
