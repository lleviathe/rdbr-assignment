<?php

namespace App\Services;

use App\Contracts\FileService;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class LocalFileService implements FileService
{
    public function save(UploadedFile $file, $path = '/'): string|bool
    {
        return $file->storeAs($path, $file->getClientOriginalName());
    }

    public function delete(string $path): void
    {
        Storage::delete($path);
    }

    public function getUrl(string $path): string
    {
        return Storage::url($path);
    }
}
