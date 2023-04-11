<?php

namespace Database\Seeders;

use App\Models\slider;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        slider::create([
            'title' => 'CCTV Camera Installation Services',
            'image' => 'screen2.jpg',
            'description' => 'CCTV camera installation services provide enhanced security through the setup and configuration of surveillance cameras in homes, businesses, and public places.',
           ]);
    }
}
