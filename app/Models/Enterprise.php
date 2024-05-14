<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Enterprise extends Model
{
    use HasFactory;

    protected $fillable = [
        'enterprise_name',
        'enterprise_role',
        'enterprise_status',
        'enterprise_type',
        'enterprise_sector',
        'enterprise_phone_number',
        'enterprise_email',
        'city_id',
        'subcity_id',
        'woreda_id',
        'kebele_id',
        'enterprise_username',
        'enterprise_password',
        'jobless_id',
    ];

    public static function rules() {
        return [
            'enterprise_name' => 'required|string|max:255',
            'enterprise_role' => 'nullable|string|max:255',
            'enterprise_status' => 'required|string|max:100',
            'enterprise_type' => 'required|string|max:100',
            'enterprise_sector' => 'required|string|max:255',
            'enterprise_phone_number' => 'nullable|string|max:50',
            'enterprise_email' => 'nullable|email|max:255',
            'enterprise_username' => 'required|string|max:255|unique:enterprises',
            'enterprise_password' => 'required|string|min:8',
            'jobless_id' => 'nullable|exists:jobless,id',
            'city_id' => 'nullable|exists:cities,id',
            'subcity_id' => 'nullable|exists:subcities,id',
            'woreda_id' => 'nullable|exists:woredas,id',
            'kebele_id' => 'nullable|exists:kebeles,id',
        ];
    }

    public function city() {
        return $this->belongsTo(City::class);
    }

    public function subcity() {
        return $this->belongsTo(Subcity::class);
    }

    public function woreda() {
        return $this->belongsTo(Woreda::class);
    }

    public function kebele() {
        return $this->belongsTo(Kebele::class);
    }

    public function jobless() {
        return $this->belongsTo(Jobless::class);
    }
}
