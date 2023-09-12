<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\FacilityHomePage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FacilitySeederHomePage extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FacilityHomePage::create([
            'id' => 1,
            'title' => 'All Facilities We Have',
            'sub_title' => 'Facilities',
            'description' => 'Located in the five star flagship property, ‘The Steigenberger Makadi Golf Hotel’, the golf shop is the focal meeting point to start your game or enquire about one of our exclusive 18 hole round packages or PGA tuition programs. Whatever your golfing needs the golf shop and sales staff are always on hand to ensure your experience is first class.',
        ]);
    }
}
