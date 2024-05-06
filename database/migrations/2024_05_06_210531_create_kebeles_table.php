<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kebele extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'woreda_id'];

    // Relationship with Woreda
    public function woreda()
    {
        return $this->belongsTo(Woreda::class);
    }
}
