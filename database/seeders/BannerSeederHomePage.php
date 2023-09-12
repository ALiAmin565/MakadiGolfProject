<?php

namespace Database\Seeders;

use App\Models\BannerHomePage;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BannerSeederHomePage extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BannerHomePage::create([
            'id' => 1,
            'title' => 'on Green Fees Exclusively for Madinat Makadi In-House Guests.',
            'sub_title' => 'Up to 15% Discount',
            'image' => 'bannerTest.jpg',
            'description' => 'Golfing at Madinat Makadi is guaranteed to be a rewarding experience with the stunning views of the Red Sea, mountains, beautiful landscapes, and all-year-round sunshine. Madinat Makadi is considered an ideal destination for golfers of all levels.',
        ]);
    }
}
