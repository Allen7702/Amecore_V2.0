<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Seeders\BookingSectionSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            CategorySeeder::class,
            UserSeeder::class,
           SliderSeeder::class, 
           ServiceSeeder::class,
           FeatureSectionSeeder::class,
           BookingSectionSeeder::class,
           AboutSectionSeeder::class,
           AboutSeeder::class,
           ContactSeeder::class,
        ]);
    }
}
