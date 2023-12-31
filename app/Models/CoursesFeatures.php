<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoursesFeatures extends Model
{
    use HasFactory;
    protected $fillable = [
        'course_id',
        'title',
        'name',
        'desc',
        'image',
    ];
}
