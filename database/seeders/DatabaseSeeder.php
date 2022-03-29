<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            DierenTableSeeder::class,
            GeitTableSeeder::class,
            HondTableSeeder::class,
            KatTableSeeder::class,
            KonijnTableSeeder::class,
            SchildpadTableSeeder::class,
            HuisTableSeeder::class,
            RolesTableSeeder::class,
            UsersTableSeeder::class
        ]);
    }
}
