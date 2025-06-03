<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kuisoner extends Model
{
    use HasFactory;
    protected $table = 'kuisoners';
    protected $guarded = ['id'];


    public function BalasanKuisoner()
    {
        return $this->belongsTo(BalasanKuisoner::class, 'id', 'kuisoner_id');
    }
}
