<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class experience extends Model
{
    use HasFactory;
    protected $fillable = [
        'job_title',
        'start_year',
        'end_year',
        'seniority',
        'location',
        
    ];
}
