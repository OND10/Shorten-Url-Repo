<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BriefUrl extends Model
{
    use HasFactory;

    protected $fillable = [
        'id','orignlink', 'abbreviatedlink', 'visitors_count',
        // Add other fields as needed
    ];

}
