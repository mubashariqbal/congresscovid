<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $casts = [
        'date_of_birth' => 'date',
        'entered_office' => 'date',
        'term_end' => 'date',
        'positive_date' => 'date',
        'negative_date' => 'date',
    ];
}
