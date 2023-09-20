<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutUsIcons extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'second_title',
        'third_title',
        'description',
        'second_description',
        'third_description',
        'icon',
        'second_icon',
        'third_icon',
    ];

    protected $table = 'about_us_icons';

    // Handle the model data
    private static function handleModel($request)
    {
        $data = [
            'title' => $request->title,
            'second_title' => $request->second_title,
            'third_title' => $request->third_title,
            'description' => $request->description,
            'second_description' => $request->second_description,
            'third_description' => $request->third_description,
            'icon' => $request->icon,
            'second_icon' => $request->second_icon,
            'third_icon' => $request->third_icon,
        ];
        return $data;
    }

    // Update the model
    public static function updateModel($request, $id)
    {
        $aboutUsIcons = self::find($id);
        return $aboutUsIcons->update(self::handleModel($request));
    }
}
