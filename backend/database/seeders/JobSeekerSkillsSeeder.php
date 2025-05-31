<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JobSeekerSkillsSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('job_seeker_skills')->insert([
            ['job_seeker_id' => 1, 'skill_id' => 1, 'level' => 80],
            ['job_seeker_id' => 1, 'skill_id' => 2, 'level' => 70],
            ['job_seeker_id' => 2, 'skill_id' => 3, 'level' => 60],
            ['job_seeker_id' => 2, 'skill_id' => 2, 'level' => 90],
            ['job_seeker_id' => 3, 'skill_id' => 4, 'level' => 50],
            ['job_seeker_id' => 3, 'skill_id' => 5, 'level' => 100], 
            ['job_seeker_id' => 4, 'skill_id' => 1, 'level' => 80],
            ['job_seeker_id' => 4, 'skill_id' => 2, 'level' => 70],
            ['job_seeker_id' => 4, 'skill_id' => 3, 'level' => 60],
            ['job_seeker_id' => 5, 'skill_id' => 2, 'level' => 90],
            ['job_seeker_id' => 5, 'skill_id' => 4, 'level' => 50], 
            ['job_seeker_id' => 6, 'skill_id' => 5, 'level' => 100],
        ]);
    }
}

