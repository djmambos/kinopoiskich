<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string $name
 */
class Movie extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'img'
    ];
}
