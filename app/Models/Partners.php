<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partners extends Model
{
    use HasFactory;

    protected $table = 'partners';

    protected $fillable = [
        'title',
        'description',
        'image',
        'link',
        'stars_count',
    ];

    protected $casts = [
        'stars_count' => 'integer',
    ];

    private static function handleModel($request, $existingImagePath)
    {
        $data = [
            'title' => $request->title,
            'description' => $request->description,
            'link' => $request->link,
            'stars_count' => $request->stars_count,
            'image' => $existingImagePath, // Initialize with existing image path
        ];
        // Check if a new image is provided in the request
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $newImage = $request->file('image');
            // Generate a unique filename based on current time and the original filename
            $newImageFilename = time() . '_' . $newImage->getClientOriginalName();
            // Construct the directory path using the public_path() function
            $imageDirectory = public_path('assetsFront/images/partners/');
            // Store the new image in the desired directory with the generated filename
            $newImage->move($imageDirectory,  $newImageFilename);
            if ($existingImagePath) {
                $fullExistingImagePath = public_path('assetsFront/images/partners/') . $existingImagePath;
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
        $partners = self::find($id);
        return $partners->delete();
    }

    public static function updateModel($request, $id)
    {
        $partners = self::find($id);
        $existingImagePath = $partners->image; // Store the existing image path
        return $partners->update(self::handleModel($request, $existingImagePath));
    }

    public static function SaveModel($request)
    {
        return self::create(self::handleModel($request, $request->image));
    }

    
}
