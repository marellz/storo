<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::factory(10)->create([
            'password' => bcrypt('secret'),
        ]);
        
        User::factory()->create([
            'name'=>'Dave Njoroge',
            'email'=>'dave@dev.com',
            'password' => bcrypt('secret'),
        ]);
    }
}
