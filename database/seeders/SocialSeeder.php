<?php

namespace Database\Seeders;

use App\Models\Social;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SocialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Social::create([
            'title'=>'Facebook',
            'link'=>'https://www.facebook.com/groups/azeri.developers',
            'icon'=>'fab fa-facebook-f',
        ]);
        Social::create([
            'title'=>'İnstgram',
            'link'=>'https://www.facebook.com/groups/azeri.developers',
            'icon'=>'fab fa-instagram',
        ]);
        Social::create([
            'title'=>'Youtube',
            'link'=>'https://www.facebook.com/groups/azeri.developers',
            'icon'=>'fab fa-youtube',
        ]);
    }
}
