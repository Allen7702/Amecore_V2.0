<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            [
                'title' => 'CCTV Installation',
                'description' => 'Installing a CCTV system involves setting up surveillance cameras in strategic locations, connecting them to a central monitoring system, configuring the system settings, and thoroughly testing the system, and it is recommended to hire a professional installation service for proper installation!',
                'image' => 'cctv (4).png',
            ],
            [
                'title' => 'Customer-Centric Solutions',
                'description' => "Developing customer-centric solutions involves prioritizing the customer's experience and satisfaction, and creating strategies, and processes that are tailored to meet their needs, ultimately improving customer loyalty and differentiation from competitors.!",
                'image' => 'puzzle.png',
            ],
            [
                'title' => 'Cybersecurity Consultations',
                'description' => "Cybersecurity consultations involve a comprehensive evaluation of an organization's cybersecurity posture, identifying vulnerabilities and risks, and recommending solutions to prevent cyber threats and ultimately helping organizations establish an effective cybersecurity strategy.!",
                'image' => 'working.png',
            ],
            [
                'title' => 'LAN Installation',
                'description' => "LAN installation is the process of setting up a local area network, connecting multiple devices and enabling them to share resources and communicate with each other.!",
                'image' => 'lan (4).png',
            ],
            [
                'title' => 'Telecommunication',
                'description' => "Telecommunication refers to the exchange of information over a distance, using various technologies such as telephones, radios, and the internet!",
                'image' => 'antenna (1).png',
            ],
            [
                'title' => 'Software Design',
                'description' => "Software design is the process of conceptualizing and planning the structure, functionality, and behavior of a software system to meet specific requirements and objectives!",
                'image' => 'software-development.png',
            ],
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
}
