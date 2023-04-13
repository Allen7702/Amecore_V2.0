<?php

namespace Database\Seeders;

use App\Models\AboutSection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $aboutSections=[
        [
          'title_primary'=>'Transforming for',
          'title_sec'=>'A DIGITAL FUTURE',
          'description'=>'At AMECORE, no matter which industry sector you belong to, we understand the challenges that your organisation and your customers face.
          We partner with you on your journey to Digital Transformation, so that you can effectively and efficiently solve your customers’ problems, today and in the future.
           Our expertise spans the length and breadth of the Information and Communication Technology (ICT) arena – whether you need to migrate to the Cloud or develop
            customised Applications.',
          'image'=>'net.jpg',
        ],

        ];

        foreach ($aboutSections as $section){
            AboutSection::create($section);
                    }
    }
}
