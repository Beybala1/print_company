<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Contact::create([
            'email'=>'example@gmail.com',
            'phone_1'=>'(+994)50-555-55-55',
            'phone_2'=>'(+994)50-555-55-55',
            'place_1'=>'Lorem ipsum',
            'place_2'=>'Lorem ipsum',
        ]);
    }
}
