<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
            "name",
            "lastname",
            "age",
            "address",
            "responsible_name",
            "phone_number",
            "groups_id",
            "school_id",
                  
    ];




}
