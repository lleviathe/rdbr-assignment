<?php

use App\Http\Controllers\CandidateController;
use App\Http\Controllers\SkillController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix('v1')->group(function () {
    Route::apiResource('candidates', CandidateController::class)->names('api.v1.candidates');
    Route::apiResource('skills', SkillController::class)->names('api.v1.skills');

    Route::controller(CandidateController::class)->group(function () {
        Route::patch('candidates/{candidate}/changeStatus', 'changeStatus')->name('api.v1.candidates.changeStatus');
        Route::get('candidates/{candidate}/skills', 'getSkills')->name('api.v1.candidates.skills');
        Route::get('candidates/{candidate}/timeline', 'getTimeline')->name('api.v1.candidates.timeline');
        Route::get('candidates/status/{status}', 'getByStatus')->name('api.v1.candidates.getByStatus');
    });
});
