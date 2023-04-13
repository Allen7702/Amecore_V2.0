<?php

namespace Database\Seeders;

use App\Models\BookingSection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookingSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $bookingSections= [
            [
                'section_title' => 'In need of a solution?',
                'section_subtitle' => 'Book Now!',
                'section_description' => 'Get the best service for your business from the very best! At Amecore, our customers are our priority.',
                'icon_path' => 'working.png',
                'icon_title' => 'Consultation',
                'icon_description' => 'Tailored end-to-end solutions to transform your business',
               
            ],
          
            [
                'icon_path' => 'wrench.png',
                'icon_title' => 'Installation',
                'icon_description' => 'Tailored end-to-end solutions to transform your business',
            ],
            [
                'icon_path' => 'solution.png',
                'icon_title' => 'Solution',
                'icon_description' => 'Tailored end-to-end solutions to transform your business',
            ],
            [
                'icon_path' => 'graphic-design.png',
                'icon_title' => 'Software Design',
                'icon_description' => 'Tailored end-to-end solutions to transform your business',
            ],
        ];

        foreach ($bookingSections as $content) {
            BookingSection::create($content);  

        }    }
}
