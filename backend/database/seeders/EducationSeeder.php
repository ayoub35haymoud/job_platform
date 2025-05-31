<?php

namespace Database\Seeders;

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class EducationSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('educations')->insert([
            [
                'job_seeker_id' => 1,
                'degree' => 'Bachelor',
                'field_of_study' => 'Graphic Design',
                'institution_name' => 'University of Calgary',
                'institution_city' => 'Calgary',
                'institution_country' => 'Canada',
                'start_date' => '2015-09-01',
                'end_date' => '2018-06-30',
                'grade' => '3.6/4.0',
                'description' => 'Focused on visual identity, branding and user interface projects.',
                'certificate_url' => '/certificates/alice_bachelor.pdf',
                'created_at' => Carbon::parse('2025-05-01 10:00:00'),
                'updated_at' => Carbon::parse('2025-05-10 14:00:00'),
            ],
            [
                'job_seeker_id' => 2,
                'degree' => 'Master',
                'field_of_study' => 'Computer Science',
                'institution_name' => 'Université Laval',
                'institution_city' => 'Québec',
                'institution_country' => 'Canada',
                'start_date' => '2017-09-01',
                'end_date' => '2019-06-30',
                'grade' => 'Honours',
                'description' => 'Specialized in backend development and data systems.',
                'certificate_url' => '/certificates/marc_master.pdf',
                'created_at' => Carbon::parse('2025-05-03 11:15:00'),
                'updated_at' => Carbon::parse('2025-05-12 16:45:00'),
            ],
            // Ajoute les autres 4 de la même manière…
            [
                'job_seeker_id' => 3,
                'degree' => 'Diploma',
                'field_of_study' => 'Marketing',
                'institution_name' => 'British Columbia Institute of Technology',
                'institution_city' => 'Burnaby',
                'institution_country' => 'Canada',
                'start_date' => '2016-01-01',
                'end_date' => '2018-12-31',
                'grade' => null,
                'description' => 'Concentrated on digital marketing strategies and analytics.',
                'certificate_url' => '/certificates/julie_diploma.pdf',
                'created_at' => Carbon::parse('2025-05-05 08:30:00'),
                'updated_at' => Carbon::parse('2025-05-15 10:12:00'),
            ],
            [
                'job_seeker_id' => 4,
                'degree' => 'Bachelor',
                'field_of_study' => 'Software Engineering',
                'institution_name' => 'McGill University',
                'institution_city' => 'Montreal',
                'institution_country' => 'Canada',
                'start_date' => '2014-09-01',
                'end_date' => '2018-06-30',
                'grade' => null,
                'description' => null,
                'certificate_url' => null,
                'created_at' => Carbon::parse('2025-05-06 09:00:00'),
                'updated_at' => Carbon::parse('2025-05-16 11:20:00'),
            ],
            [
                'job_seeker_id' => 5,
                'degree' => 'Bachelor',
                'field_of_study' => 'Data Science',
                'institution_name' => 'University of Toronto',
                'institution_city' => 'Toronto',
                'institution_country' => 'Canada',
                'start_date' => '2015-09-01',
                'end_date' => '2019-06-30',
                'grade' => null,
                'description' => null,
                'certificate_url' => null,
                'created_at' => Carbon::parse('2025-05-07 10:15:00'),
                'updated_at' => Carbon::parse('2025-05-17 12:30:00'),
            ],
            [
                'job_seeker_id' => 6,
                'degree' => 'Diploma',
                'field_of_study' => 'Graphic Design',
                'institution_name' => 'Concordia University',
                'institution_city' => 'Montreal',
                'institution_country' => 'Canada',
                'start_date' => '2016-01-01',
                'end_date' => '2018-12-31',
                'grade' => null,
                'description' => null,
                'certificate_url' => null,
                'created_at' => Carbon::parse('2025-05-08 11:00:00'),
                'updated_at' => Carbon::parse('2025-05-18 13:45:00'),
            ],
           
        ]);
    }
}

