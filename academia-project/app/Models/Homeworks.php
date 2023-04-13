<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Homeworks extends Model
{
    use HasFactory;

    protected $fillable = [
        "status",
        "student_id",
        "course_id"
       
    ];
}
