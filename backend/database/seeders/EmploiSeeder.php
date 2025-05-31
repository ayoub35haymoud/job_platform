<?php

namespace Database\Seeders;

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class EmploiSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('emplois')->insert([
            [
                'recruiter_id' => 1,
                'title' => 'Registered Nurse – ER',
                'code_noc' => null,
                'city' => 'Toronto',
                'province' => 'Ontario',
                'salary_min' => 60000,
                'salary_max' => 75000,
                'salary_type' => 'yearly',
                'job_type' => 'full_time',
                'visa_sponsorship' => true,
                'language_required' => 'English',
                'education_level' => 'Bachelor',
                'experience_required' => 2,
                'application_deadline' => '2025-08-01',
                'max_apply' => null,
                'job_details' => 'Provide emergency care to patients in a hospital ER.',
                'status' => 'active',
                'created_at' => Carbon::parse('2025-05-20 08:00:00'),
                'updated_at' => Carbon::parse('2025-05-20 08:00:00'),
            ],
            [
                'recruiter_id' => 2,
                'title' => 'Medical Assistant',
                'code_noc' => null,
                'city' => 'Vancouver',
                'province' => 'British Columbia',
                'salary_min' => 20,
                'salary_max' => 25,
                'salary_type' => 'hourly',
                'job_type' => 'part_time',
                'visa_sponsorship' => false,
                'language_required' => 'English',
                'education_level' => 'Diploma',
                'experience_required' => 1,
                'application_deadline' => '2025-07-15',
                'max_apply' => null,
                'job_details' => 'Assist physicians with routine tasks, patient records, and scheduling.',
                'status' => 'active',
                'created_at' => Carbon::parse('2025-05-20 09:30:00'),
                'updated_at' => Carbon::parse('2025-05-20 09:30:00'),
            ],
            // Ajoute les 4 autres de façon identique...
        ]);
    }
}

