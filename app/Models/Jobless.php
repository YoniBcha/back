<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



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
        'jobless_role',
        'jobless_age', 
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
        'jobless_identification_card',
        'jobless_photo',
        'jobless_training_certificate',
        'jobless_evidence_card',
        'jobless_priority_evidence',
    ];
}
