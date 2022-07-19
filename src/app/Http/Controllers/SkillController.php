<?php

namespace App\Http\Controllers;

use App\Http\Requests\Skill\StoreSkillRequest;
use App\Http\Requests\Skill\UpdateSkillRequest;
use App\Http\Resources\Skill\SkillResource;
use App\Models\Skill;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response as R;

class SkillController extends Controller
{
    public function index(): JsonResponse
    {
        $skills = Skill::paginate();

        return SkillResource::collection($skills)->response();
    }

    public function store(StoreSkillRequest $request): JsonResponse
    {
        $skill = Skill::create($request->validated());

        return SkillResource::make($skill)->response()->setStatusCode(R::HTTP_CREATED);
    }

    public function show(Skill $skill): JsonResponse
    {
        return SkillResource::make($skill)->response();
    }

    public function update(UpdateSkillRequest $request, Skill $skill): JsonResponse
    {
        $skill->update($request->validated());

        return SkillResource::make($skill)->response();
    }

    public function destroy(Skill $skill): JsonResponse
    {
        $skill->delete();

        return response()->json(null, R::HTTP_NO_CONTENT);
    }
}
