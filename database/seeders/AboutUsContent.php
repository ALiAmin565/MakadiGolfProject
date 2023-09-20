<?php

namespace Database\Seeders;

use App\Models\AboutUs;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AboutUsContent extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // create about us content
        AboutUs::create([
            'title' => 'About Us',
            'sub_title' => 'Our Story',
            'description' => 'Lorem ipsum dolor sit amet c onsectetur adipisicing elit. Quisquam, quidem. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quidem. Lorem ipsum dolor sit amet c onsectetur adipisicing elit. Quisquam, quidem. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quidem.',
            'num_of_years' => 10,
            'youtube_link' => 'https://www.youtube.com/embed/7e90gBu4pas',
            'image' => 'About-Us.png',
        ]);
    }
}
