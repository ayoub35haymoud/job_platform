<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subscribe extends Model
{
    protected $fillable = [
        'recruiter_id',
        'plan_id',
        'start_date',
        'end_date',
        'status',
        'auto_renew',
        'jobs_remaining',
        'cv_views_remaining',
    ];

    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
        'auto_renew' => 'boolean',
    ];

    public function recruiter()
    {
        return $this->belongsTo(Recruiter::class);
    }

    public function plan()
    {
        return $this->belongsTo(Plan::class);
    }
    public function invoice()
    {
        return $this->hasOne(Invoice::class);
    }
}

