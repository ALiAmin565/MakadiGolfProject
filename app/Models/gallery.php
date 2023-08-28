<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gallery extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
    ];


    private static function handleModel($request, $existingImagePaths = [])
    {

        $imageData = [];
        // Loop through each uploaded image file
        foreach ($request->file('images') as $newImage) {
            // Check if the uploaded file is valid
            if ($newImage->isValid()) {
                // Generate a unique filename based on current time and the original filename
                $newImageFilename = time() . '_' . $newImage->getClientOriginalName();

                // Construct the directory path using the provided destination directory
                $imageDirectory = public_path('assetsFront/images/gallery/images');

                // Store the new image in the desired directory with the generated filename
                $newImage->move($imageDirectory, $newImageFilename);

                // If an existing image path is provided, delete the existing image
                foreach ($existingImagePaths as $existingImagePath) {
                    $fullExistingImagePath = public_path('assetsFront/images/gallery/images/') . $existingImagePath;
                    if (file_exists($fullExistingImagePath)) {
                        unlink($fullExistingImagePath);
                    }
                }

                // Add the image filename to the image data array
                $imageData[] = $newImageFilename;
            }
        }

        return $imageData;
    }

    public static function SaveModel($request)
    {
        // Get the array of image filenames
        $imageData = self::handleModel($request, $request->images);
        // Loop through the image filenames and insert them into the table
        foreach ($imageData as $imageName) {
            // Assuming you have a model named 'FacilityImage' representing the table
            gallery::create([
                'image' => $imageName,
            ]);
        }
    }

    public static function deleteModel($id)
    {
        $image = gallery::find($id);
        $imageName = $image->image;
        $fullExistingImagePath = public_path('assetsFront/images/gallery/images/') . $imageName;
        if (file_exists($fullExistingImagePath)) {
            unlink($fullExistingImagePath);
        }
        $image->delete();
    }
}
