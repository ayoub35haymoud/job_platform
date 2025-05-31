<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $fillable = [
        'subscribe_id',
        'recruiter_id',
        'invoice_number',
        'amount',
        'currency',
        'payment_method',
        'payment_reference',
        'status',
        'issued_at',
        'paid_at',
        'pdf_path',
    ];

    protected $casts = [
        'issued_at' => 'datetime',
        'paid_at' => 'datetime',
    ];

    public function recruiter()
    {
        return $this->belongsTo(Recruiter::class);
    }

    public function subscribe()
    {
        return $this->belongsTo(Subscribe::class);
    }
}

