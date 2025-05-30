<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class RecruiterSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('recruiters')->insert([
            [
                'user_id' => 7,
                'company_name' => 'TechNova Inc.',
                'company_website' => 'https://technova.com',
                'industry' => 'Information Technology',
                'company_size' => '51–200 employees',
                'logo_url' => '/logos/technova.png',
                'location' => 'Toronto',
                'description' => 'Innovative software company specializing in AI solutions.',
                'contact_person' => 'Sarah Kim',
                'contact_position' => 'HR Manager',
                'phone_number' => '+1-416-555-1122',
                'created_at' => Carbon::parse('2025-05-01 10:00:00'),
                'updated_at' => Carbon::parse('2025-05-10 14:00:00'),
            ],
            [
                'user_id' => 8,
                'company_name' => 'GreenMed Clinics',
                'company_website' => 'https://greenmed.ca',
                'industry' => 'Healthcare',
                'company_size' => '11–50 employees',
                'logo_url' => '/logos/greenmed.png',
                'location' => 'Vancouver',
                'description' => 'Network of private medical clinics across British Columbia.',
                'contact_person' => 'Dr. Alex Morgan',
                'contact_position' => 'Clinic Director',
                'phone_number' => '+1-604-555-2211',
                'created_at' => Carbon::parse('2025-05-03 11:00:00'),
                'updated_at' => Carbon::parse('2025-05-12 16:45:00'),
            ],
            // Ajoute ici les autres recruteurs 3–6...
            [
                'user_id' => 9,
                'company_name' => 'EduTech Solutions',
                'company_website' => 'https://edutechsolutions.com',
                'industry' => 'Education Technology',
                'company_size' => '201–500 employees',
                'logo_url' => '/logos/edutech.png',
                'location' => 'Montreal',
                'description' => 'Leading provider of online learning platforms and tools.',
                'contact_person' => 'Laura Chen',
                'contact_position' => 'Talent Acquisition Lead',
                'phone_number' => '+1-514-555-3344',
                'created_at' => Carbon::parse('2025-05-05 09:30:00'),
                'updated_at' => Carbon::parse('2025-05-15 12:00:00'),
            ],
        ]);
    }
}
