<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class ApplicationSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('applications')->insert([
            [
                'emploi_id' => 1,
                'recruiter_id' => 1,
                'job_seeker_id' => 1,
                'cover_letter' => 'Passionate nurse with ER experience.',
                'cv_url' => '/cvs/alice_cv.pdf',
                'status' => 'pending',
                'created_at' => Carbon::parse('2025-05-22 09:30:00'),
                'updated_at' => Carbon::parse('2025-05-22 09:30:00'),
            ],
            [
                'emploi_id' => 1,
                'recruiter_id' => 1,
                'job_seeker_id' => 2,
                'cover_letter' => 'I’ve worked in busy clinics and love patient contact.',
                'cv_url' => '/cvs/marc_cv.pdf',
                'status' => 'reviewed',
                'created_at' => Carbon::parse('2025-05-22 10:10:00'),
                'updated_at' => Carbon::parse('2025-05-22 12:00:00'),
            ],
            [
                'emploi_id' => 2,
                'recruiter_id' => 2,
                'job_seeker_id' => 2,
                'cover_letter' => 'Experienced in SEO/SEM, ready to join your team.',
                'cv_url' => '/cvs/julie_cv.pdf',
                'status' => 'pending',
                'created_at' => Carbon::parse('2025-05-22 10:45:00'),
                'updated_at' => Carbon::parse('2025-05-22 10:45:00'),
            ],
            [
                'emploi_id' => 2,
                'recruiter_id' => 2,
                'job_seeker_id' => 1,
                'cover_letter' => 'Motivated and physically fit, willing to work outside.',
                'cv_url' => '/cvs/thomas_cv.pdf',
                'status' => 'pending',
                'created_at' => Carbon::parse('2025-05-22 11:20:00'),
                'updated_at' => Carbon::parse('2025-05-22 11:45:00'),
            ],
            [
                'emploi_id' => 1,
                'recruiter_id' => 1, 
                'job_seeker_id' => 3,
                'cover_letter' => 'PMP certified project manager with 6 years’ experience.',
                'cv_url' => '/cvs/karine_cv.pdf',
                'status' => 'rejected',
                'created_at' => Carbon::parse('2025-05-22 12:00:00'),
                'updated_at' => Carbon::parse('2025-05-22 12:20:00'),
            ],
            [
                'emploi_id' => 1,
                'recruiter_id' => 1,
                'job_seeker_id' => 4,
                'cover_letter' => 'I’m a recent grad passionate about data analytics.',
                'cv_url' => '/cvs/louis_cv.pdf',
                'status' => 'pending',
                'created_at' => Carbon::parse('2025-05-22 13:30:00'),
                'updated_at' => Carbon::parse('2025-05-22 13:30:00'),
            ],
        ]);
    }
}

