<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JohnSanford extends Model
{
    use HasFactory;

    protected $table = 'john_sanford';

    protected $fillable = [
        'title',
        'image',
        'description',
    ];

    private static function handleModel($request, $existingImagePath)
    {
        $data = [
            'title' => $request->title,
            'description' => $request->description,
            'image' => $existingImagePath,
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
            if ($existingImagePath && $existingImagePath !== 'john-sanford.jpg') {
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
        $johnSanford = self::find($id);
        $existingImagePath = $johnSanford->image; // Store the existing image path
        return $johnSanford->update(self::handleModel($request, $existingImagePath));
    }
}
