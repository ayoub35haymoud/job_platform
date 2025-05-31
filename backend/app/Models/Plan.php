<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    protected $fillable = [
        'name',
        'price',
        'duration_days',
        'description',
        'max_jobs',
        'max_cv_views',
    ];

    public function subscribes()
    {
        return $this->hasMany(Subscribe::class);
    }

    public function subscribesActive()
    {
        return $this->hasMany(Subscribe::class)->where('status', 'active');
    }

    public function subscribesInactive()
    {
        return $this->hasMany(Subscribe::class)->where('status', 'inactive');
    }
    

}