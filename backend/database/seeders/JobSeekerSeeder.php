<?php

namespace Database\Seeders;

use Illuminate\Contracts\Queue\Job;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use App\Models\JobSeeker;
// This seeder populates the job_seekers table with sample data for testing purposes.

class JobSeekerSeeder extends Seeder
{
    public function run(): void
    {
        JobSeeker::create([
            'user_id' => 1,
            'first_name' => 'Julie',
            'last_name' => 'Moreau',
            'profession' => 'Marketing Coordinator',
            'address' => '789 Pine Alley',
            'city' => 'Vancouver',
            'province' => 'BC',
            'postal_code' => 'V6B 1M5',
            'country' => 'Canada',
            'email' => 'julie.moreau@example.com',
            'phone_number' => '+1-604-555-0789',
            'links' => json_encode([
                'linkedin' => 'https://www.linkedin.com/in/juliemoreau',
                'portfolio' => 'https://julieportfolio.com',
            ]),
            'resume_phat' => null,
            'letter_phat' => null,
            'profile_completed' => false,
            'about' => 'Experienced in digital campaigns, SEO, and content strategy.',
            'created_at' => Carbon::parse('2025-05-05 08:30:00'),
            'updated_at' => Carbon::parse('2025-05-15 10:12:00'),
        ]);
        JobSeeker::create([
            'user_id' => 2,
            'first_name' => 'Thomas',
            'last_name' => 'Leclerc',
            'profession' => 'Software Engineer',
            'address' => '456 Maple Street',
            'city' => 'Montreal',
            'province' => 'QC',
            'postal_code' => 'H2Y 1A1',
            'country' => 'Canada',
            'email' => 'thomas.leclerc@example.com',
            'phone_number' => '+1-514-555-1234',
            'links' => json_encode([
                'linkedin' => 'https://www.linkedin.com/in/thomasleclerc',
                'github' => 'https://github.com/thomasleclerc',
            ]),
            'resume_phat' => null,
            'letter_phat' => null,
            'profile_completed' => false,
            'about' => 'Passionate about building scalable web applications and APIs.',
            'created_at' => Carbon::parse('2025-05-06 09:00:00'),
            'updated_at' => Carbon::parse('2025-05-16 11:20:00'),
        ]);
        JobSeeker::create([
            'user_id' => 3,
            'first_name' => 'Alice',
            'last_name' => 'Dupont',
            'profession' => 'Data Analyst',
            'address' => '123 Elm Street',
            'city' => 'Toronto',
            'province' => 'ON',
            'postal_code' => 'M5H 2N2',
            'country' => 'Canada',
            'email' => 'alice.dupont@example.com',
            'phone_number' => '+1-416-555-5678',
            'links' => json_encode([
                'linkedin' => 'https://www.linkedin.com/in/alicedupont',
                'portfolio' => 'https://alicedataportfolio.com',
            ]),
            'resume_phat' => null,
            'letter_phat' => null,
            'profile_completed' => false,
            'about' => 'Skilled in data visualization, SQL, and statistical analysis.',
            'created_at' => Carbon::parse('2025-05-07 10:15:00'),
            'updated_at' => Carbon::parse('2025-05-17 12:30:00'),
        ]);
        JobSeeker::create([
            'user_id' => 4,
            'first_name' => 'Marc',
            'last_name' => 'Tremblay',
            'profession' => 'Graphic Designer',
            'address' => '321 Oak Avenue',
            'city' => 'Quebec City',
            'province' => 'QC',
            'postal_code' => 'G1R 3Y8',
            'country' => 'Canada',
            'email' => 'marc.tremblay@example.com',
            'phone_number' => '+1-418-555-9876',
            'links' => json_encode([
                'linkedin' => 'https://www.linkedin.com/in/marctremblay',
                'portfolio' => 'https://marcgraphicportfolio.com',
            ]),
            'resume_phat' => null,
            'letter_phat' => null,
            'profile_completed' => false,
            'about' => 'Creative designer with a passion for visual storytelling.',
            'created_at' => Carbon::parse('2025-05-08 11:00:00'),
            'updated_at' => Carbon::parse('2025-05-18 13:45:00'),
        ]);
        JobSeeker::create([
            'user_id' => 5,
            'first_name' => 'Sophie',
            'last_name' => 'Lavoie',
            'profession' => 'Product Manager',
            'address' => '654 Birch Road',
            'city' => 'Ottawa',
            'province' => 'ON',
            'postal_code' => 'K1A 0B1',
            'country' => 'Canada',
            'email' => 'sophie.lavoie@example.com',
            'phone_number' => '+1-613-555-4321',
            'links' => json_encode([
                'linkedin' => 'https://www.linkedin.com/in/sophielavoie',
                'portfolio' => 'https://sophieportfolio.com',
            ]),
            'resume_phat' => null,
            'letter_phat' => null,
            'profile_completed' => false,
            'about' => 'Experienced in leading cross-functional teams and product development.',
            'created_at' => Carbon::parse('2025-05-09 12:00:00'),
            'updated_at' => Carbon::parse('2025-05-19 14:00:00'),
        ]);
        



        JobSeeker::create([
            'user_id' => 6,
            'first_name' => 'Emma',
            'last_name' => 'Bouchard',
            'profession' => 'UX Designer',
            'address' => '789 Pine Lane',
            'city' => 'Vancouver',
            'province' => 'BC',
            'postal_code' => 'V5K 0A1',
            'country' => 'Canada',
            'email' => 'emma.bouchard@example.com',
            'phone_number' => '+1-604-555-6789',
            'links' => json_encode([
                'linkedin' => 'https://www.linkedin.com/in/emmabouchard',
                'portfolio' => 'https://emmadesignportfolio.com',
            ]),
            'resume_phat' => null,
            'letter_phat' => null,
            'profile_completed' => false,
            'about' => 'Passionate about creating user-centered designs.',
            'created_at' => Carbon::parse('2025-05-10 13:00:00'),
            'updated_at' => Carbon::parse('2025-05-20 15:00:00'),
        ]);
        
    }             
}

