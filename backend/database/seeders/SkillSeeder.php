<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class SkillSeeder extends Seeder
{
    public function run(): void
    {
        $skills = [
            'Patient Assessment',
            'Phlebotomy',
            'Vital Signs Monitoring',
            'Medication Administration',
            'ECG Interpretation',
            'Wound Care',
            'Infection Control',
            'Electronic Medical Records (EMR)',
            'CPR / BLS Certification',
            'Medical Terminology',
            'HIPAA Compliance',
            'Triage',
            'Bedside Manner',
            'Team Communication',
            'Medical Billing & Coding',
            'Lab Sample Collection',
            'Operating Room Assistance',
            'Patient Education',
            'Time Management',
            'IV Insertion',
        ];

        foreach ($skills as $skill) {
            DB::table('skills')->insert([
                'name' => $skill,
                'created_at' => Carbon::parse('2025-05-28 10:00:00'),
                'updated_at' => Carbon::parse('2025-05-28 10:00:00'),
            ]);
        }
    }
}

