<?php

namespace App\Services;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\FilesImport;
use Exception;

class ImportService
{
    public function getImportFile(Request $request)
    {
        $file = $request->file('documento');
        $name = $file->getClientOriginalName();
        $path = $file->storeAs('import', $name);

        $dados = Excel::toArray(new FilesImport, storage_path('app/' . $path));
            
        return $dados;
    }
}
