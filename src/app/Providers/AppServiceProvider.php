<?php

namespace App\Providers;

use App\Http\Resources\Candidate\CandidateResource;
use App\Http\Resources\CandidateStatusChange\CandidateStatusChangeResource;
use App\Http\Resources\Skill\SkillResource;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        CandidateResource::withoutWrapping();
        SkillResource::withoutWrapping();
        CandidateStatusChangeResource::withoutWrapping();
    }
}
