<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;

class JoblessDocument extends Model
{
    use HasFactory;
    protected $table = 'jobless_documents';

    protected $fillable = [
        'jobless_id',
        'jobless_photo',
        'jobless_identification_card',
        'jobless_training_certificate',
        'jobless_evidence_card',
        'jobless_priority_evidence',
    ];

    /**
     * Get the jobless record associated with the document.
     */
    public function jobless()
    {
        return $this->belongsTo(Jobless::class);
    }

    /**
     * Get the validation rules.
     *
     * @return array
     */
    public static function validationRules()
    {
        return [
            'jobless_id' => 'required|string|max:255',
            'jobless_photo' => 'nullable|file|mimes:pdf,jpeg,png,jpg|max:2048',
            'jobless_identification_card' => 'nullable|file|mimes:pdf,jpeg,png,jpg|max:2048',
            'jobless_training_certificate' => 'nullable|file|mimes:pdf,jpeg,png,jpg|max:2048',
            'jobless_evidence_card' => 'nullable|file|mimes:pdf,jpeg,png,jpg|max:2048',
            'jobless_priority_evidence' => 'nullable|file|mimes:pdf,jpeg,png,jpg|max:2048',
        ];
    }
}
