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
        About::create([
            'title'=>'Lorem ipsum',
            'description'=>'Lorem ipsum',
            'image'=>'frontend\assets\images\about\about-bg-1.png',
        ]);
    }
}
