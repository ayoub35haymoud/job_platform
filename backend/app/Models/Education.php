<?php

namespace App\Models;

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\JobSeeker;

class Education extends Model
{
    use HasFactory;
    /**
     * The table associated with the model.
     */
    protected $fillable = [
        'job_seeker_id',
        'degree',
        'field_of_study',
        'institution_name',
        'institution_city',
        'institution_country',
        'start_date',
        'end_date',
        'grade',
        'description',
        'certificate_url',
    ];

    public function jobSeeker()
    {
        return $this->belongsTo(JobSeeker::class);
    }
}
