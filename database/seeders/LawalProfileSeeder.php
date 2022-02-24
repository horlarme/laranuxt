<?php

namespace Database\Seeders;

use App\Models\Experience;
use App\Models\Service;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;

class LawalProfileSeeder extends Seeder
{
    public function run()
    {
        User::query()->firstOrCreate([
            'full_name' => 'Lawal Oladipupo',
            'bio' => 'Hey, you are welcome to my portfolio! Let me introduce myself... Just wait, I am thinking of what to tell you!',
            'email' => 'lawaloladipupo@outlook.com',
            'password' => bcrypt('anything_works'),
            'social_facebook' => 'https://facebook.com/blessedhorlar',
            'social_github' => 'https://github.com/horlarme',
            'social_instagram' => 'https://instagram.com/i_am_meetweb',
            'social_twitter' => 'https://twitter.com/@first_lawal',
            'social_linkedin' => 'https://www.linkedin/in/lawal-oladipupo-ba9525b0/'
        ]);

        Experience::factory(3)->create();
        Skill::factory(10)->create();
        Service::factory(5)->create();
    }
}
