<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCandidateRequest;
use App\Models\Candidate;
use Illuminate\Http\JsonResponse;

class CandidateController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json(Candidate::all());
    }

    public function store(StoreCandidateRequest $request): JsonResponse
    {
        //
    }

    public function show(Candidate $candidate): JsonResponse
    {
        //
    }

    public function changeStatus(Candidate $candidate): JsonResponse
    {
        //
    }

    public function getTimeline(Candidate $candidate): JsonResponse
    {
        //
    }
}
