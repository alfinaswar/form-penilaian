<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kuisoner extends Model
{
    use HasFactory;
    protected $table = 'kuisoners';
    protected $guarded = ['id'];


    protected $casts = [
        'Status1' => 'array',
        'Bobot1' => 'array',
        'Total1' => 'array',
        'Nilai1' => 'array',
        'Total2' => 'array',
        'Nilai2' => 'array',
        'Status2' => 'array',
        'Bobot2' => 'array',
        'Total3' => 'array',
        'Nilai3' => 'array',
        'Status3' => 'array',
        'Bobot3' => 'array',
        'Catatan' => 'array',
    ];
}
