<?php

namespace Database\Seeders;

use App\Models\AboutUsIcons;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AboutUsIconsSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AboutUsIcons::create([
            'title' => 'Our Mission',
            'second_title' => 'Our Vision',
            'third_title' => 'Our Values',
            'description' => 'Lorem ipsum dolor sit amet c onsectetur adipisicing elit. Quisquam, quidem. Lorem ipsum dolor sit amet consectetur adipisicing elit',
            'second_description' => 'Lorem ipsum dolor sit amet c onsectetur adipisicing elit. Quisquam, quidem. Lorem ipsum dolor sit amet consectetur adipisicing elit',
            'third_description' => 'Lorem ipsum dolor sit amet c onsectetur adipisicing elit. Quisquam, quidem. Lorem ipsum dolor sit amet consectetur adipisicing elit',
            'icon' => 'golftio-flag',
            'second_icon' => 'golftio-flag',
            'third_icon' => 'golftio-flag',
        ]);
    }
}
