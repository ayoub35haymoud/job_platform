<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $fillable = [
        'job_id',
        'recruiter_id',
        'job_seeker_id',
        'cover_letter',
        'cv_url',
        'status',
    ];

    public function Emploi()
    {
        return $this->belongsTo(Emploi::class);
    }

    public function recruiter()
    {
        return $this->belongsTo(Recruiter::class);
    }

    public function jobSeeker()
    {
        return $this->belongsTo(JobSeeker::class);
    }
}

