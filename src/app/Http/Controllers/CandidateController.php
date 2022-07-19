<?php

namespace App\Http\Controllers;

use App\Http\Requests\Candidate\ChangeCandidateStatusRequest;
use App\Http\Requests\Candidate\StoreCandidateRequest;
use App\Http\Requests\Candidate\UpdateCandidateRequest;
use App\Http\Resources\Candidate\CandidateResource;
use App\Http\Resources\CandidateStatusChange\CandidateStatusChangeResource;
use App\Http\Resources\Skill\SkillResource;
use App\Models\Candidate;
use App\Services\CandidateService;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response as R;

class CandidateController extends Controller
{
    public function __construct(
        private CandidateService $service
    ) {
    }

    public function index(): JsonResponse
    {
        $candidates = Candidate::all();

        return CandidateResource::collection($candidates)->response();
    }

    public function store(StoreCandidateRequest $request): JsonResponse
    {
        $candidate = $this->service->create($request->validated(), $request->file('cv'));

        if (!$candidate) {
            return response()->json(['message' => 'Failed to create candidate'], R::HTTP_INTERNAL_SERVER_ERROR);
        }

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
        $result = $this->service->update($candidate, $request->validated());

        if (!$result) {
            return response()->json(['message' => 'Failed to update candidate'], R::HTTP_INTERNAL_SERVER_ERROR);
        }

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
