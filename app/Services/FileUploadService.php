<?php

namespace App\Services;

use Illuminate\Support\Str;

class FileUploadService
{
    protected $uploadPath;

    public function __construct()
    {
        $this->uploadPath = public_path('uploads');
    }

    public function uploadSingleImage($file)
    {
        return $this->uploadFile($file, 'images');
    }

    public function uploadSingleVideo($file)
    {
        return $this->uploadFile($file, 'videos');
    }

    public function uploadMultipleImages(array $files)
    {
        return $this->uploadMultipleFiles($files, 'images');
    }

    public function uploadMultipleVideos(array $files)
    {
        return $this->uploadMultipleFiles($files, 'videos');
    }

    private function uploadFile($file, $type)
    {
        $extension = $file->getClientOriginalExtension();
        $filename = $this->generateUniqueFilename($extension);

        $directory = $this->uploadPath . '/' . $type;

        if (!file_exists($directory)) {
            mkdir($directory, 0777, true);
        }

        $file->move($directory, $filename);

        return "uploads/{$type}/{$filename}";
    }

    private function uploadMultipleFiles(array $files, $type)
    {
        $paths = [];
        foreach ($files as $file) {
            $paths[] = $this->uploadFile($file, $type);
        }
        return $paths;
    }

    private function generateUniqueFilename($extension)
    {
        return time() . '_' . Str::uuid() . '.' . $extension;
    }
}
