<?php

namespace Database\Seeders;

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class ExperienceSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('experiences')->insert([
            [
                'job_seeker_id' => 1,
                'job_title' => 'Graphic Designer',
                'company_name' => 'PixelWorks',
                'location' => 'Calgary',
                'start_date' => '2019-03-01',
                'end_date' => '2022-11-30',
                'is_current' => false,
                'description' => 'Created visual identities, marketing campaigns, and social media visuals for tech startups.',
                'company_website' => 'https://pixelworks.ca',
                'reference_contact' => 'design@pixelworks.ca',
                'created_at' => Carbon::parse('2025-05-01 10:00:00'),
                'updated_at' => Carbon::parse('2025-05-10 14:00:00'),
            ],
            [
                'job_seeker_id' => 2,
                'job_title' => 'Backend Developer',
                'company_name' => 'CodeWave Inc.',
                'location' => 'Québec',
                'start_date' => '2020-01-01',
                'end_date' => null,
                'is_current' => true,
                'description' => 'Developed REST APIs and database structures for internal ERP systems using Laravel and PostgreSQL.',
                'company_website' => 'https://codewave.ca',
                'reference_contact' => 'techlead@codewave.ca',
                'created_at' => Carbon::parse('2025-05-03 11:00:00'),
                'updated_at' => Carbon::parse('2025-05-12 16:45:00'),
            ],
            // Ajoute les autres expériences de la même façon...
            [
                'job_seeker_id' => 3,
                'job_title' => 'Marketing Coordinator',
                'company_name' => 'TechCorp Solutions',
                'location' => 'Vancouver',
                'start_date' => '2021-06-01',
                'end_date' => null,
                'is_current' => true,
                'description' => 'Managed digital marketing campaigns, SEO optimization, and content creation for B2B clients.',
                'company_website' => 'https://techcorpsolutions.com',
                'reference_contact' => 'contact@techcorpsolutions.com',
                'created_at' => Carbon::parse('2025-05-05 09:30:00'),
                'updated_at' => Carbon::parse('2025-05-15 12:00:00'),
            ],
            [
                'job_seeker_id' => 4,
                'job_title' => 'Software Engineer',
                'company_name' => 'Innovatech Labs',
                'location' => 'Montreal',
                'start_date' => '2022-02-01',
                'end_date' => null,
                'is_current' => true,
                'description' => 'Building scalable web applications and APIs using Node.js and React.',
                'company_website' => 'https://innovatechlabs.com',
                'reference_contact' => 'contact@innovatechlabs.com', 
                
                'created_at' => Carbon::parse('2025-05-20 08:00:00'),
                'updated_at' => Carbon::parse('2025-05-25 15:30:00'),
            ],
            [
                'job_seeker_id' => 5,
                'job_title' => 'Data Analyst',
                'company_name' => 'Data Insights Co.',
                'location' => 'Toronto',
                'start_date' => '2023-01-15',
                'end_date' => null,
                'is_current' => true,
                'description' => 'Analyzing large datasets to provide actionable insights for business strategies.',
                'company_website' => 'https://datainsightsco.com',
                'reference_contact' => 'contact@datainsightsco.com', 
                'created_at' => Carbon::parse('2025-05-20 08:00:00'),
                'updated_at' => Carbon::parse('2025-05-25 15:30:00'),
            ],
        ]);
    }
}

