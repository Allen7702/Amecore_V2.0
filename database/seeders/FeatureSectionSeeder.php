<?php

namespace Database\Seeders;

use App\Models\FeatureSection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FeatureSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $featureHeading = [
            'main_image' => 'screen.jpg',
            'second_image' => 'amec.png',
            'heading' => 'Why Choose Us?',
            'subheading' => '<span class="text-primary">Reliable</span> and Devoted',
            'description' => 'Tailored end-to-end cloud solutions to transform your business!'
        ];

        FeatureSection::create($featureHeading);

        $features = [
            ['icon' => 'best-seller.png', 'title' => 'Best In Industry'],
            ['icon' => 'solution (1).png', 'title' => 'Effective Solutions'],
            ['icon' => '24-hours-support.png', 'title' => 'Reliable Services'],
            ['icon' => 'customer-service.png', 'title' => 'Customer Support'],
        ];

        foreach ($features as $feature) {
            FeatureSection::create($feature);  
          }
}
}