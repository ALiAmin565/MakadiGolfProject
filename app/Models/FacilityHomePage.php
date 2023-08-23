<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FacilityHomePage extends Model
{
    use HasFactory;

    protected $table = 'facility_home_page';

    protected $fillable = [
        'title',
        'sub_title',
        'description',
    ];

    private static function handleModel($request)
    {
        $data = [
            'title' => $request->title,
            'sub_title' => $request->sub_title,
            'description' => $request->description,
        ];
        return $data;
    }


    public static function updateModel($request, $id)
    {
        $bannerHomePage = self::find($id);
        return $bannerHomePage->update(self::handleModel($request));
    }
}
