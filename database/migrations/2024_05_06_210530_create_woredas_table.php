<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Woreda extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'subcity_id'];

    // Relationship with Subcity
    public function subcity()
    {
        return $this->belongsTo(Subcity::class);
    }

    // Relationship with Kebeles
    public function kebeles()
    {
        return $this->hasMany(Kebele::class);
    }
}