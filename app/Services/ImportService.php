<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\FilesImport;

class ImportService
{
    public function getImportFile($filename)
    {
        $path = storage_path('app/import/' . $filename);
        $contents = Storage::get($path);
        $data = Excel::toArray(new FilesImport, $contents);

        return $data;
    }
}
