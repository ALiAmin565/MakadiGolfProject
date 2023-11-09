<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    use HasFactory;

    protected $table = 'faq_question';

    protected $fillable = [
        'question',
        'answer',
    ];

    private static function handleModel($request)
    {
        $data = [
            'question' => $request->question,
            'answer' => $request->answer,
        ];
        return $data;
    }


    public static function deleteModel($id)
    {
        $faq = self::find($id);
        return $faq->delete();
    }

    public static function updateModel($request, $id)
    {
        $faq = self::find($id);
        $faq->update(self::handleModel($request));
        return $faq;
    }

    public static function SaveModel($request)
    {
        return self::create(self::handleModel($request));
    }


}
