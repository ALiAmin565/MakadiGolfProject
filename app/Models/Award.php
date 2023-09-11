<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Award extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'image',
        'link',
    ];

    public $table = 'awards';

    private static function handleModel($request, $existingImagePath)
    {
        $data = [
            'name' => $request->title,
            'description' => $request->description,
            'link' => $request->link,
            'image' => $existingImagePath, // Initialize with existing image path
        ];
        // Check if a new image is provided in the request
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $newImage = $request->file('image');
            // Generate a unique filename based on current time and the original filename
            $newImageFilename = time() . '_' . $newImage->getClientOriginalName();
            // Construct the directory path using the public_path() function
            $imageDirectory = public_path('assetsFront/images/awards/');
            // Store the new image in the desired directory with the generated filename
            $newImage->move($imageDirectory,  $newImageFilename);
            if ($existingImagePath) {
                $fullExistingImagePath = public_path('assetsFront/images/awards/') . $existingImagePath;
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
        $award = self::find($id);
        return $award->delete();
    }

    public static function updateModel($request, $id)
    {
        $award = self::find($id);
        $existingImagePath = $award->image; // Store the existing image path
        return $award->update(self::handleModel($request, $existingImagePath));
    }

    public static function SaveModel($request)
    {
        return self::create(self::handleModel($request, $request->image));
    }
}
