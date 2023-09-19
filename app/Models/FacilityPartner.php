<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FacilityPartner extends Model
{
    use HasFactory;

    protected $fillable = [
        'facility_id',
        'partner_id',
    ];

    protected $table = 'facility_partner';

}
