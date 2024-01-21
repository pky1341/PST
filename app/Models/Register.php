<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    use HasFactory;

    protected $fillable = [
        "name","village","tehsil","district","state","date_of_birth","blood_group","education","job","religion","cast","sub_cast"
        ];
}
