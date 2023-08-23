<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FacilityImages extends Model
{
    use HasFactory;

    protected $fillable = [
        'facility_id',
        'image',
    ];

    protected $table = 'facility_images';

    public function facility()
    {
        return $this->belongsTo(Facilities::class , 'facility_id' , 'id');
    }

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
                $imageDirectory = public_path('assetsFront/images/facility/images');

                // Store the new image in the desired directory with the generated filename
                $newImage->move($imageDirectory, $newImageFilename);

                // If an existing image path is provided, delete the existing image
                foreach ($existingImagePaths as $existingImagePath) {
                    $fullExistingImagePath = public_path('assetsFront/images/facility/images') . $existingImagePath;
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

    public static function SaveModel($request, $facilityId)
    {
        // Get the array of image filenames
        $imageData = self::handleModel($request, $request->images);

        // Loop through the image filenames and insert them into the table
        foreach ($imageData as $imageName) {
            // Assuming you have a model named 'FacilityImage' representing the table
            FacilityImages::create([
                'facility_id' => $facilityId,
                'image' => $imageName,
            ]);
        }
    }

    public static function deleteModel($id)
    {
        $facility = self::find($id);
        return $facility->delete();
    }
}
