<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'sub_title',
        'description',
        'num_of_years',
        'image',
        'youtube_link',
    ];

    protected $table = 'about_us';


    private static function handleModel($request, $existingImagePath)
    {
        $data = [
            'title' => $request->title,
            'sub_title' => $request->sub_title,
            'description' => $request->description,
            'num_of_years' => $request->num_of_years,
            'youtube_link' => $request->youtube_link ? $request->youtube_link : null,
            'image' => $existingImagePath, // Initialize with existing image path
        ];
        // Check if a new image is provided in the request
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $newImage = $request->file('image');
            // Generate a unique filename based on current time and the original filename
            $newImageFilename = time() . '_' . $newImage->getClientOriginalName();
            // Construct the directory path using the public_path() function
            $imageDirectory = public_path('assetsFront/images');
            // Store the new image in the desired directory with the generated filename
            $newImage->move($imageDirectory,  $newImageFilename);
            if ($existingImagePath && $existingImagePath !== 'About-Us.png') {
                $fullExistingImagePath = public_path('assetsFront/images/') . $existingImagePath;
                if (file_exists($fullExistingImagePath)) {
                    unlink($fullExistingImagePath);
                }
            }
            $data['image'] = $newImageFilename;
        }

        return $data;
    }


    public static function updateModel($request, $id)
    {
        $aboutUs = self::find($id);
        $existingImagePath = $aboutUs->image; // Store the existing image path
        return $aboutUs->update(self::handleModel($request, $existingImagePath));
    }


}
