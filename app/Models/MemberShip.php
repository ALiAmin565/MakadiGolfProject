<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MemberShip extends Model
{
    use HasFactory;

    protected $fillable = [
        'familyName',
        'firstName',
        'presentHomeAddress',
        'passportNumber',
        'cellNumber',
        'homeNumber',
        'emailAddress',
        'membershipType',
        'residentOrTourist',
        'hotelName',
        'addressResidence',
    ];

    protected $table = 'member_ships';

    private static function handleModel($request)
    {
        $data = [
            'familyName' => $request->familyName,
            'firstName' => $request->firstName,
            'presentHomeAddress' => $request->presentHomeAddress,
            'passportNumber' => $request->passportNumber,
            'cellNumber' => $request->cellNumber,
            'homeNumber' => $request->homeNumber,
            'emailAddress' => $request->emailAddress,
            'membershipType' => $request->membershipType,
            'residentOrTourist' => $request->residentOrTourist,
            'hotelName' => $request->hotelName,
            'addressResidence' => $request->addressResidence,
        ];
        return $data;
    }

    public static function SaveModel($request)
    {
        return self::create(self::handleModel($request));
    }
}
