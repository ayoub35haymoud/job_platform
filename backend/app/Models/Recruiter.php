<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recruiter extends Model
{
    protected $fillable = [
        'user_id',
        'company_name',
        'company_website',
        'industry',
        'company_size',
        'logo_url',
        'location',
        'description',
        'contact_person',
        'contact_position',
        'phone_number',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function emplois()
    {
        return $this->hasMany(Emploi::class);
    }
    public function subscribe(){
        return $this->hasOne(Subscribe::class);
    }
    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }
}

