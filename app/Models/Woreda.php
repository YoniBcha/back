<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Woreda extends Model
{
    protected $fillable = ['name', 'subcity_id'];

    public function subcity()
    {
        return $this->belongsTo(Subcity::class);
    }
}
