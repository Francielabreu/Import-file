<?php

namespace App\Http\Controllers;

use App\Imports\FilesImport;
use App\Services\ImportService;
use Exception;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{

    private $importService;

    public function __construct(ImportService $importService)
    {
        $this->importService = $importService;
    }

    public function index()
    {
        return view('files.index');
    }


    public function import(Request $request)
    {

        try {

            $file = $request->file('documento');

            if (!$file || $file->getSize() == 0) {
                $errorMessage = "O arquivo está vazio, Por favor envie um arquivo valido.";
                throw new Exception($errorMessage);
            }

            $dados = $this->importService->getImportFile($request);
            return view('files.index', ['dados' => $dados]);
        } catch (Exception $e) {
            return redirect()->back()->withErrors([$e->getMessage()]);
        }
    }
}
