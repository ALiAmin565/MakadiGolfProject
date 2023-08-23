<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facilities extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'icon',
        'image',
        'description',
        'youtube_link',
        'related_to',
    ];

    protected $table = 'facilities';

    private static function handleModel($request, $existingImagePath)
    {
        $data = [
            'name' => $request->name,
            'icon' => $request->icon,
            'youtube_link' => $request->youtube_link,
            'related_to' => $request->related_to,
            'description' => $request->description,
            'image' => $existingImagePath, // Initialize with existing image path
        ];
        // Check if a new image is provided in the request
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $newImage = $request->file('image');
            // Generate a unique filename based on current time and the original filename
            $newImageFilename = time() . '_' . $newImage->getClientOriginalName();
            // Construct the directory path using the public_path() function
            $imageDirectory = public_path('assetsFront/images/facility/');
            // Store the new image in the desired directory with the generated filename
            $newImage->move($imageDirectory,  $newImageFilename);
            if ($existingImagePath) {
                $fullExistingImagePath = public_path('assetsFront/images/facility/') . $existingImagePath;
                if (file_exists($fullExistingImagePath)) {
                    unlink($fullExistingImagePath);
                }
            }
            $data['image'] = $newImageFilename;
        }

        return $data;
    }

    public static function deleteModel($id)
    {
        $facility = self::find($id);
        return $facility->delete();
    }

    public static function updateModel($request, $id)
    {
        $facility = self::find($id);
        $existingImagePath = $facility->image; // Store the existing image path
        return $facility->update(self::handleModel($request, $existingImagePath));
    }

    public static function SaveModel($request)
    {
        return self::create(self::handleModel($request, $request->image));
    }

    public function facilityImages()
    {
        return $this->hasMany(FacilityImages::class , 'facility_id' , 'id');
    }
}
