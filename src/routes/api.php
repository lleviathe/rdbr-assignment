<?php

use App\Http\Controllers\CandidateController;
use Illuminate\Http\Request;
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
    Route::controller(CandidateController::class)->group(function () {
        Route::get('candidates', 'index')->name('api.v1.candidates.index');
        Route::post('candidates', 'store')->name('api.v1.candidates.store');
        Route::put('candidates/{candidate}/changeStatus', 'changeStatus')->name('api.v1.candidates.changeStatus');
        Route::get('candidates/{candidate}', 'show')->name('api.v1.candidates.show');
        Route::get('candidates/{candidate}/timeline', 'getTimeline')->name('api.v1.candidates.timeline');
        Route::get('candidates/status/{status}', 'getByStatus')->name('api.v1.candidates.getByStatus');
    });
});
