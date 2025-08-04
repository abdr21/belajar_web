<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        /*User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);*/
        $this->call([
             CategorySeeder::class,
             UserSeeder::class,
             ProjectSeeder::class,
             TagSeeder::class,
            // PostsSeeder::class,
            // CommentsSeeder::class,       
            // PostTagSeeder::class,
            // SettingsSeeder::class,
            // RolesAndPermissionsSeeder::class,
            // UserRolesSeeder::class,
        ]);
    }
}
