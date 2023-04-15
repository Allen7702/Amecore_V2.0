<?php

namespace Database\Seeders;

use App\Models\contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $contacts=[
            [
              'title'=>'Contact Us',
              'title_image'=>'camerax.jpg',
              'heading'=>'If You Have Any Query, Feel Free To Contact Us',
              'description'=>'+255 713 999 934',
              'icon_name'=>'Call to ask any question',
              'icon'=>'fa fa-phone-alt text-white',
              
            ],
            [
              'description'=>'info@amecore.co.tz',
              'icon_name'=>'Email to get in touch',
              'icon'=>'fa fa-envelope-open text-white',
            ],
            [
              'icon_name'=>'Visit our office',
              'description'=>'Mwai Kibaki Road,Mikocheni',
              'icon'=>'fa fa-map-marker-alt text-white',
             
            ],
          
          ];
    
            foreach ($contacts as $contact){
                contact::create($contact);
            }
        }
    }
    