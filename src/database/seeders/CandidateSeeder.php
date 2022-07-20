<?php

namespace Database\Seeders;

use App\Models\Candidate;
use App\Models\CandidateStatusChange;
use App\Models\Skill;
use Illuminate\Database\Seeder;

class CandidateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $skills = Skill::all();

        Candidate::factory()
            ->count(10)
            ->create()
            ->each(function ($candidate) use ($skills) {
                $candidate->skills()->attach(
                    $skills->random(random_int(3, 10))->pluck('id')->toArray()
                );

                $candidate->statusChanges()->createMany(
                    CandidateStatusChange::factory()->count(random_int(1, 5))->make()->toArray()
                );
            });
    }
}
