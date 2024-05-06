<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcity extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'city_id'];

    // Relationship with City
    public function city()
    {
        return $this->belongsTo(City::class);
    }

    // Relationship with Woredas
    public function woredas()
    {
        return $this->hasMany(Woreda::class);
    }
}
