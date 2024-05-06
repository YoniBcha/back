<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    // Relationship with Subcities
    public function subcities()
    {
        return $this->hasMany(Subcity::class);
    }
}
