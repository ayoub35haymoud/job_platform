<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Alice Dupont',
                'email' => 'alice.dupont@email.com',
                'password' => Hash::make('password123'), // Bcrypt hash (déjà hashé)
                'role' => 'job_seeker',
                'created_at' => Carbon::parse('2025-05-01 10:00:00'),
                'updated_at' => Carbon::parse('2025-05-01 10:00:00'),
            ],
            [
                'name' => 'Marc Tremblay',
                'email' => 'marc.tremblay@email.com',
                'password' => Hash::make('securepassword'), // Bcrypt hash (déjà hashé)
                'role' => 'job_seeker',
                'created_at' => Carbon::parse('2025-05-02 09:30:00'),
                'updated_at' => Carbon::parse('2025-05-02 09:30:00'),
            ],
            [
                'name' => 'Julie Moreau',
                'email' => 'julie@techcorp.ca',
                'password' => Hash::make('mypassword'),
                'role' => 'job_seeker',
                'created_at' => Carbon::parse('2025-05-02 14:15:00'),
                'updated_at' => Carbon::parse('2025-05-02 14:15:00'),
            ],
            [
                'name' => 'Thomas Leclerc',
                'email' => 'thomas@recrutal.com',
                'password' => Hash::make('anothersecurepassword'),
                'role' => 'job_seeker',
                'created_at' => Carbon::parse('2025-05-03 11:45:00'),
                'updated_at' => Carbon::parse('2025-05-03 11:45:00'),
            ],
            [
                'name' => 'Karine Boucher',
                'email' => 'admin@monsterclone.com',
                'password' => Hash::make('adminpassword'),
                'role' => 'job_seeker',
                'created_at' => Carbon::parse('2025-05-04 08:00:00'),
                'updated_at' => Carbon::parse('2025-05-04 08:00:00'),
            ],
            [
                'name' => 'Louis Gagnon',
                'email' => 'louis.gagnon@email.com',
                'password' => Hash::make('jobseekerpassword'),
                'role' => 'job_seeker',
                'created_at' => Carbon::parse('2025-05-05 16:25:00'),
                'updated_at' => Carbon::parse('2025-05-05 16:25:00'),
            ],
            [
                'name' => 'Sarah Kim',
                'email' => 'sarah.kim@email.com',
                'password' => Hash::make('sarahpassword'),
                'role' => 'recruiter',
                'created_at' => Carbon::parse('2025-05-05 16:30:00'),
                'updated_at' => Carbon::parse('2025-05-05 16:30:00'),
            ],
            [
                'name' => 'Alex Morgan',
                'email' => 'alex.morgan@email.com',
                'password' => Hash::make('alexpassword'),
                'role' => 'recruiter',
                'created_at' => Carbon::parse('2025-05-06 10:00:00'),
                'updated_at' => Carbon::parse('2025-05-06 10:00:00'),
            ],
            [
                'name' => 'Laura Chen',
                'email' => 'laura.chen@email.com',
                'password' => Hash::make('laurapassword'),
                'role' => 'recruiter',
                'created_at' => Carbon::parse('2025-05-07 12:45:00'),
                'updated_at' => Carbon::parse('2025-05-07 12:45:00'),
            ],
        ]);
    }
}

