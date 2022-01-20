<?php

namespace Database\Seeders;

use App\Models\User;
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
        User::create([
            'name'     => 'Administrator',
            'email'    => 'admin@app.com',
            'role'    => 'admin',
            'password' => bcrypt('password'),
        ]);
    }
}
