<?php

namespace App\Contracts;

use Illuminate\Http\UploadedFile;

interface FileService
{
    public function save(UploadedFile $file, $path = '/'): string|bool;

    public function delete(string $path): void;

    public function getUrl(string $path): string;
}
