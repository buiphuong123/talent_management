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
            UserSeeder::class,
        ]);
        \App\Models\User::factory(100)->create();
        \App\Models\Schedule::factory(100)->create();
        \App\Models\Task::factory(10)->create();
    }
}
