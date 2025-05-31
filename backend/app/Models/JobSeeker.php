<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Education;

class JobSeeker extends Model
{
    /** @use HasFactory<\Database\Factories\JobSeekerFactory> */
    use HasFactory;
    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'profession',
        'address',
        'city',
        'province',
        'postal_code',
        'country',
        'email',
        'phone_number',
        'links',
        'resume_phat',
        'letter_phat',
        'profile_completed',
        'about'
    ];
    protected $casts = [
        'links' => 'array',
        'profile_completed' => 'boolean',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
    public function educations()
    {
        return $this->hasMany(Education::class);
    }
    public function experiences()
    {
        return $this->hasMany(Experience::class);
    }
    public function skills()
    {
        return $this->belongsToMany(Skill::class, 'job_seeker_skills')
                    ->withPivot('level')
                    ->withTimestamps();
    }
    public function applications()
    {
        return $this->hasMany(Application::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function getFullNameAttribute()
    {
        return "{$this->first_name} {$this->last_name}";
    }
}
