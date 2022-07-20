<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Skill::insert(
            [
                ['title' => 'PHP'],
                ['title' => 'SQL'],
                ['title' => 'JavaScript'],
                ['title' => 'HTML'],
                ['title' => 'CSS'],
                ['title' => 'Python'],
                ['title' => 'C#'],
                ['title' => 'Swift'],
                ['title' => 'Ruby'],
                ['title' => 'Kotlin'],
                ['title' => 'TypeScript'],
                ['title' => 'Go'],
            ]
        );
    }
}
