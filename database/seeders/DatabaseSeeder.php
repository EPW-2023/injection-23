<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\RegistrationFee;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::create([
            'username' => 'dev',
            'password' =>
                '$2a$12$5G3XhJdXbRQHKmoYmusjUeQhu/HQjaeQCfW4xoxRRjo.fjhGvlb9O',
            'role' => 'Dev',
        ]);
        RegistrationFee::create([
            'registration_fee' => '75.001',
        ]);
    }
}
