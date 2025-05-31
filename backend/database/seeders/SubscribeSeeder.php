<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class SubscribeSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('subscribes')->insert([
            [
                'recruiter_id' => 1,
                'plan_id' => 1,
                'start_date' => Carbon::parse('2025-05-01'),
                'end_date' => Carbon::parse('2025-05-31'),
                'status' => 'active',
                
                'auto_renew' => true,
                'jobs_remaining' => 5,
                'cv_views_remaining' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'recruiter_id' => 2,
                'plan_id' => 2,
                'start_date' => Carbon::parse('2025-05-01'),
                'end_date' => Carbon::parse('2025-06-01'),
                'status' => 'active',
                
                'auto_renew' => false,
                'jobs_remaining' => null,
                'cv_views_remaining' => 50,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
