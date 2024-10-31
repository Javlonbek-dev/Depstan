<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CorruptionTitle extends Model
{
    use HasFactory;

    protected $fillable = ['title'];

    public function corruption()
    {
        return $this->hasMany(Corruption::class, 'title_id', 'id');
    }
}
