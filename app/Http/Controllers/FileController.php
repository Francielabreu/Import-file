<?php

namespace App\Http\Controllers;

use App\Imports\FilesImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    public function import(Request $request) 
{
    $file = $request->file('documento');
    $name = 'prefixo-' . $file->getClientOriginalName();
    $path = $file->storeAs('import', $name);

    $data = Excel::toArray(new FilesImport, storage_path('app/' . $path));

    // Faça o que precisar com a matriz de dados...

    return redirect('/')->with('success', 'All good!');
}
}
