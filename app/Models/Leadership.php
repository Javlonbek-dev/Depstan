<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leadership extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'position',
        'full_name',
        'phone',
        'birth_date_place',
        'info',
        'family_info',
        'reception_days',
        'nationality',
        'work_activities',
        'image',
        'partisanship'

    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'work_activities' => 'array',
    ];
}
