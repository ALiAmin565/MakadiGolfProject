<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Holes extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'image',
        'logo',
    ];

    private static function handleModel($request, $existingImagePath , $existingImagePathLogo)
    {
        $data = [
            'title' => $request->title,
            'description' => $request->description,
            'logo' => $existingImagePathLogo, // Initialize with existing imageLogo path
            'image' => $existingImagePath, // Initialize with existing image path
        ];
        // Check if a new image is provided in the request
        if ($request->hasFile('image') && $request->file('image')->isValid() ) {
            $newImage = $request->file('image');
            // Generate a unique filename based on current time and the original filename
            $newImageFilename = time() . '_' . $newImage->getClientOriginalName();
            // Construct the directory path using the public_path() function
            $imageDirectory = public_path('assetsFront/images/holes/');
            // Store the new image in the desired directory with the generated filename
            $newImage->move($imageDirectory,  $newImageFilename);
            if ($existingImagePath) {
                $fullExistingImagePath = public_path('assetsFront/images/holes/') . $existingImagePath;
                if (file_exists($fullExistingImagePath)) {
                    unlink($fullExistingImagePath);
                }
            }
            $data['image'] = $newImageFilename;
        }
        // Check if a new image is provided in the request
        if ($request->hasFile('logo') && $request->file('logo')->isValid() ) {
            $newImage = $request->file('logo');
            // Generate a unique filename based on current time and the original filename
            $newImageFilename = time() . '_' . $newImage->getClientOriginalName();
            // Construct the directory path using the public_path() function
            $imageDirectory = public_path('assetsFront/images/holes/');
            // Store the new image in the desired directory with the generated filename
            $newImage->move($imageDirectory,  $newImageFilename);
            if ($existingImagePathLogo) {
                $fullExistingImagePath = public_path('assetsFront/images/holes/') . $existingImagePathLogo;
                if (file_exists($fullExistingImagePath)) {
                    unlink($fullExistingImagePath);
                }
            }
            $data['logo'] = $newImageFilename;
        }

        return $data;
    }

    public static function deleteModel($id)
    {
        $hole = self::find($id);
        $fullExistingImagePath = public_path('assetsFront/images/holes/') . $hole->image;
        if (file_exists($fullExistingImagePath)) {
            unlink($fullExistingImagePath);
        }
        $fullExistingImagePathLogo = public_path('assetsFront/images/holes/') . $hole->logo;
        if (file_exists($fullExistingImagePathLogo)) {
            unlink($fullExistingImagePathLogo);
        }
        return $hole->delete();
    }

    public static function updateModel($request, $id)
    {
        $hole = self::find($id);
        $existingImagePath = $hole->image; // Store the existing image path
        $existingImagePathLogo = $hole->logo; // Store the existing image path
        return $hole->update(self::handleModel($request, $existingImagePath , $existingImagePathLogo));
    }

    public static function SaveModel($request)
    {
        return self::create(self::handleModel($request, $request->image , $request->logo));
    }
}
