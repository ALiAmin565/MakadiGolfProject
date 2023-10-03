<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TeamContent extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // create about us content
        Team::create([
            'title' => 'Meet Our Team',
            'sub_title' => 'Our Story',
            'description' => 'Lorem ipsum dolor sit amet c onsectetur adipisicing elit. Quisquam, quidem. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quidem. Lorem ipsum dolor sit amet c onsectetur adipisicing elit. Quisquam, quidem. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quidem.',
            'image' => 'team-shoot2.jpg',
        ]);
    }
}
