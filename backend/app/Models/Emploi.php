<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Emploi extends Model
{
    protected $fillable = [
        'recruiter_id',
        'title',
        'code_noc',
        'city',
        'province',
        'salary_min',
        'salary_max',
        'salary_type',
        'job_type',
        'visa_sponsorship',
        'language_required',
        'education_level',
        'experience_required',
        'application_deadline',
        'max_apply',
        'job_details',
        'status',
    ];

    protected $casts = [
        'visa_sponsorship' => 'boolean',
        'application_deadline' => 'date',
    ];

    public function recruiter()
    {
        return $this->belongsTo(Recruiter::class);
    }
}

