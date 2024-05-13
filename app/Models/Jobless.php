<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;

class Jobless extends Model
{
    use HasFactory;
    protected $table = 'jobless';

    protected $fillable = [
        'jobless_username',
        'jobless_password', 
        'jobless_full_name',
        'jobless_grandfather_name',
        'jobless_sex',
        'jobless_age',
        'jobless_role', 
        'jobless_kebele',
        'jobless_woreda',
        'jobless_city',
        'jobless_subcity',
        'jobless_phonenumber',
        'jobless_email',
        'jobless_profession',
        'jobless_housenumber',
        'jobless_familysize',
        'jobless_livingstatus',
        'jobless_birthplace',
        'jobless_family_status',
        'jobless_martial_status',
        'jobless_reason_tocome',
        'jobless_disability_status',
        'jobless_status'
    ];

    public static function rules()
    {
        return [
            'jobless_username' => [
                'required',
                'string',
                'max:255',
                Rule::unique('jobless', 'jobless_username'),
            ],
            'jobless_password' => [ 
                'required',
                'string',
                'min:8', 
               
            ],
            'jobless_full_name' => 'required|string|max:255',
            'jobless_grandfather_name' => 'nullable|string|max:255',
            'jobless_sex' => 'required|in:Male,Female', 
            'jobless_role' => 'nullable|string', 
            'jobless_age' => 'required|integer|min:18', 
            'jobless_kebele' => 'required|string|max:255',
            'jobless_woreda' => 'required|string|max:255',
            'jobless_city' => 'required|string|max:255',
            'jobless_subcity' => 'required|string|max:255',
            'jobless_phonenumber' => 'required|string|max:255',
            'jobless_email' => 'nullable|email|max:255',
            'jobless_profession' => 'required|string|max:255',
            'jobless_housenumber' => 'required|string|max:255',
            'jobless_familysize' => 'required|integer|min:1', 
            'jobless_livingstatus' => 'required|string|max:255',
            'jobless_birthplace' => 'required|string|max:255',
            'jobless_family_status' => 'required|string|max:255',
            'jobless_martial_status' => 'required|string|max:255',
            'jobless_reason_tocome' => 'required|string|text',
            'jobless_disability_status' => 'nullable|string|max:255',
            'jobless_status' => 'nullable|string|max:255'
        ];
    }
}
