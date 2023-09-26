<?php

namespace Database\Seeders;

use App\Models\JohnSanford;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JohnSanfordSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        JohnSanford::create([
            'title' => 'John Sanford',
            'image' => 'John-sanford.jpg',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.Lorem ipsumdolorsamconsecteturadipisicing elit. Quisquam, voluptatum.Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
        ]);
    }
}
