<?php

namespace Database\Seeders;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Application;
use App\Models\Invoice;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            UserSeeder::class,
            JobSeekerSeeder::class,
            EducationSeeder::class,
            ExperienceSeeder::class,
            RecruiterSeeder::class,
            SkillSeeder::class,
            JobSeekerSkillsSeeder::class,
            EmploiSeeder::class,
            ApplicationSeeder::class,
            PlanSeeder::class,
            SubscribeSeeder::class,
            InvoiceSeeder::class,
        ]);
    }
}
