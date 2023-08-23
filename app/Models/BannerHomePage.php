<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BannerHomePage extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'sub_title',
        'image',
        'description',
    ];

    protected $table = 'banner_home_pages';

    private static function handleModel($request, $existingImagePath)
    {
        $data = [
            'title' => $request->title,
            'sub_title' => $request->sub_title,
            'description' => $request->description,
            'image' => $existingImagePath, // Initialize with existing image path
        ];
        // Check if a new image is provided in the request
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $newImage = $request->file('image');
            // Generate a unique filename based on current time and the original filename
            $newImageFilename = time() . '_' . $newImage->getClientOriginalName();
            // Construct the directory path using the public_path() function
            $imageDirectory = public_path('assetsFront/images/banner/');
            // Store the new image in the desired directory with the generated filename
            $newImage->move($imageDirectory,  $newImageFilename);
            if ($existingImagePath) {
                $fullExistingImagePath = public_path('assetsFront/images/banner/') . $existingImagePath;
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
        $bannerHomePage = self::find($id);
        $existingImagePath = $bannerHomePage->image; // Store the existing image path
        return $bannerHomePage->update(self::handleModel($request, $existingImagePath));
    }
}
