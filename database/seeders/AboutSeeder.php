<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      $abouts=[
        [
          'title'=>'About Us',
          'title_image'=>'camerax.jpg',
          'heading'=>'The Best IT Solution With 10 Years of Experience',
          'description'=>'Having 10 years of experience in the IT industry is a significant accomplishment. It demonstrates that the company has had the opportunity to develop and refine its skills, knowledge, and expertise in the field.',
          'icon_name'=>'Best In Industry',
          'icon'=>'best-seller.png',
          'image'=>'solution.jpg',
          'button_text'=>'Learn More',
          'show_button'=>true,
        ],
        [
          'description'=>'With such a wealth of experience, the company is likely to have encountered and overcome a wide range of challenges, which has helped it to develop robust and effective solutions for its clients. ',
          'icon_name'=>'Effective Solutions',
          'icon'=>'solution (1).png',
        ],
        [
          'icon_name'=>'Reliable Services',
          'icon'=>'24-hours-support.png',
         
        ],
        [
          'icon_name'=>'Customer Support',
          'icon'=>'customer-service.png',
          

        ],
      ];

        foreach ($abouts as $about){
            About::create($about);
        }
    }
}
