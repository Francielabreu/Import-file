<?php

namespace App\Http\Controllers;

use App\Imports\FilesImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    public function index()
    {
        return view('files.index');
    }


    public function import(Request $request) 
{
    $file = $request->file('documento');
    $name = 'prefixo-' . $file->getClientOriginalName();
    $path = $file->storeAs('import', $name);

    $dados = Excel::toArray(new FilesImport, storage_path('app/' . $path));
    dd(array_slice($dados[1], 1));

    return view('files.index', compact('dados'));
}
}
