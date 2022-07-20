<?php

namespace App\Services;

use App\Models\Candidate;
use DB;
use Exception;
use Illuminate\Http\UploadedFile;
use Log;

class CandidateService
{
    public function __construct(
        protected FileService $fileService
    ) {
    }

    // Input array may be replaced with DTOs after refactoring.
    public function create(array $input): Candidate|bool
    {
        DB::beginTransaction();

        try {
            $candidate = Candidate::create($input);

            if (isset($input['cv']) && $input['cv'] instanceof UploadedFile) {
                $path = $this->fileService->save($input['cv'], sprintf('/cvs/%s', $candidate->id));

                $candidate->update(['cv_url' => $this->fileService->getUrl($path)]);
            }

            DB::commit();

            return $candidate;
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Failed to create candidate: ' . $e->getMessage());

            return false;
        }
    }

    public function update(Candidate $candidate, array $input): Candidate|bool
    {
        try {
            if (isset($input['cv'])) {
                $path = $this->fileService->save($input['cv'], sprintf('/cvs/%s', $candidate->id));
                $candidate->update(['cv_url' => $this->fileService->getUrl($path)]);
            }

            if (isset($input['skills'])) {
                $candidate->skills()->sync($input['skills']);
            }

            $candidate->update($input);

            return $candidate;
        } catch (Exception $e) {
            Log::error('Failed to update candidate: ' . $e->getMessage());

            return false;
        }
    }

    public function changeStatus(Candidate $candidate, array $input): Candidate|bool
    {
        DB::beginTransaction();

        try {
            $candidate->statusChanges()->create(
                [
                    'status_before' => $candidate->status,
                    'status_after' => $input['status'],
                    'comment' => $input['comment'] ?? null,
                ]
            );

            $candidate->update(
                [
                    'status' => $input['status'],
                ]
            );

            DB::commit();

            return $candidate;
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Failed to change candidate status: ' . $e->getMessage());

            return false;
        }
    }
}
