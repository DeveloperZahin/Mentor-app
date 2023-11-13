<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    protected $fillable = [
        'headdescription',
        'title',
        'description',
        'title1',
        'title2',
        'title3',
        'description1',
        'image',
    ];
}
