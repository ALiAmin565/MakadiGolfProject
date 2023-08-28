<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    use HasFactory;


    protected $fillable = [
        'title',
        'description',
        'numbers',
        'emails',
        'location',
        'google_map_link',
    ];


    protected $table = 'contact_us';

    private static function handleModel($request)
    {
        $data = [
            'title' => $request->title,
            'description' => $request->description,
            'numbers' => $request->numbers,
            'emails' => $request->emails,
            'location' => $request->location,
            'google_map_link' => $request->google_map_link,
        ];
        return $data;
    }


    public static function updateModel($request, $id)
    {
        $contactUs = self::find($id);
        return $contactUs->update(self::handleModel($request));
    }
}
