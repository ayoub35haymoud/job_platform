<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlanSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('plans')->insert([
            [
                'name' => 'Basic',
                'price' => 29.99,
                'duration_days' => 30,
                'description' => 'Post up to 5 jobs, view 10 CVs per month.',
                'max_jobs' => 5,
                'max_cv_views' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Pro',
                'price' => 79.99,
                'duration_days' => 30,
                'description' => 'Unlimited job posts, 50 CV views/month.',
                'max_jobs' => null,
                'max_cv_views' => 50,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Premium',
                'price' => 199.99,
                'duration_days' => 90,
                'description' => 'Unlimited job posts and CV views.',
                'max_jobs' => null,
                'max_cv_views' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

