<?php

namespace App\Services;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class FileService
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
