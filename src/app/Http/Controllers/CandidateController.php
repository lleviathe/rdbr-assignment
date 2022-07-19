<?php

namespace App\Http\Controllers;

use App\Http\Requests\Candidate\ChangeCandidateStatusRequest;
use App\Http\Requests\Candidate\StoreCandidateRequest;
use App\Http\Requests\Candidate\UpdateCandidateRequest;
use App\Http\Resources\Candidate\CandidateResource;
use App\Http\Resources\CandidateStatusChange\CandidateStatusChangeResource;
use App\Http\Resources\Skill\SkillResource;
use App\Models\Candidate;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response as R;

class CandidateController extends Controller
{
    public function index(): JsonResponse
    {
        $candidates = Candidate::all();

        return CandidateResource::collection($candidates)->response();
    }

    public function store(StoreCandidateRequest $request): JsonResponse
    {
        $candidate = Candidate::create($request->validated());

        return CandidateResource::make($candidate)->response()->setStatusCode(R::HTTP_CREATED);
    }

    public function show(Candidate $candidate): JsonResponse
    {
        return CandidateResource::make($candidate)->response();
    }

    public function changeStatus(Candidate $candidate, ChangeCandidateStatusRequest $request): JsonResponse
    {
        return CandidateResource::make($candidate)->response();
    }

    public function update(UpdateCandidateRequest $request, Candidate $candidate): JsonResponse
    {
        $candidate->update($request->validated());

        return CandidateResource::make($candidate)->response();
    }

    public function updateSkills(Candidate $candidate): JsonResponse
    {
        $candidate->skills()->sync(request('skills'));

        return CandidateResource::make($candidate)->response();
    }

    public function getSkills(Candidate $candidate): JsonResponse
    {
        return SkillResource::collection($candidate->skills)->response();
    }

    public function getTimeline(Candidate $candidate): JsonResponse
    {
        return CandidateStatusChangeResource::collection($candidate->statusChanges)->response();
    }

    public function destroy(Candidate $candidate): JsonResponse
    {
        $candidate->delete();

        return response()->json(null, R::HTTP_NO_CONTENT);
    }
}
