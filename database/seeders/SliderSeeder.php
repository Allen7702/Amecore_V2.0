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
        $sliders = [
            [
                'title_red'  => 'CCTV',
                'title_white' => 'Camera Installation Services',
                'description' => 'CCTV camera installation services provide enhanced security through the setup and configuration of surveillance cameras in homes, businesses, and public places.',
                'image' => 'camerax2.jpg',
                'show_button' => true,
                'button_text' => 'Start Now',
            ],
            [
                'title_red'  => 'Customer',
                'title_white' => '-Centric Solutions',
                'description' => "Customer-centric solutions are services or products designed with the customer's needs, preferences, and feedback in mind.",
                'image' => 'customerx.jpg',
                'show_button' => true,
                'button_text' => 'Start Now',
            ],
            [
                'title_red'  => 'Security',
                'title_white' => ' Consultation on Cyber Security',
                'description' => 'A security consultation on cyber security is a process where a professional evaluates an organization\'s digital security posture and provides recommendations to enhance their protection against cyber threats.',
                'image' => 'cyberx.jpg',
                'show_button' => true,
                'button_text' => 'Start Now',
            ],
            [
                'title_red'  => 'Local Area',
                'title_white' => ' Network LAN Installation',
                'description' => 'This involves installing and configuring network hardware, such as routers, switches, and cables, and software components like operating systems and applications.',
                'image' => 'lanx.jpg',
                'show_button' => true,
                'button_text' => 'Start Now',
            ],
            [
                'title_red'  => 'Telecom',
            'title_white' => 'munication Systems Installation',
            'description' => 'Telecommunication systems installation provides organizations with reliable and efficient communication channels, facilitating collaboration and productivity while reducing costs associated with outdated communication methods.',
            'image' => 'telecom.jpg',
            'show_button' => true,
            'button_text' => 'Start Now',
            ],
            [
                'title_red' => 'Software',
                'title_white' => ' Design for Web Applications',
                'description' => 'Software design for web applications involves the development and implementation of custom software solutions that run on web browsers.',
                'image' => 'soft.jpeg',
                'show_button' => true,
                'button_text' => 'Start Now',
            ],
        ];

        foreach ($sliders as $slider) {
            Slider::create($slider);
        }
    }
}
