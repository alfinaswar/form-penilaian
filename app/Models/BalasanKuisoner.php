<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BalasanKuisoner extends Model
{
    use HasFactory;
    protected $table = 'balasan_kuisoners';
    protected $guarded = ['id'];
}
