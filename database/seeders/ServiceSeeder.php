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
                'title' => 'Lorem ipsum',
                'description' => 'Lorem ipsum',
                'image' => 'frontend\assets\images\icons\s-1.png',
            ],
            [
                'title' => 'Lorem ipsum',
                'description' => 'Lorem ipsum',
                'image' => 'frontend\assets\images\icons\s-2.png',
            ],
            [
                'title' => 'Lorem ipsum',
                'description' => 'Lorem ipsum',
                'image' => 'frontend\assets\images\icons\s-3.png',
            ],
            [
                'title' => 'Lorem ipsum',
                'description' => 'Lorem ipsum',
                'image' => 'frontend\assets\images\icons\s-4.png',
            ],
        ];
        
        foreach ($services as $service) {
            Service::create($service);
        }
    }
}
