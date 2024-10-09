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

        User::create([
            'name' => 'Testinggg',
            'username' => 'testing',
            'password' => bcrypt('password'),
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'Cashier',
            'username' => 'cashier',
            'password' => bcrypt('password'),
            'role' => 'kasir',
        ]);

        $this->call([
            CategorySeeder::class,
            MenuSeeder::class,
        ]);
    }
}
