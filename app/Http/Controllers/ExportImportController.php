<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\UsersImport;
use App\Exports\UsersExport;

class ExportImportController extends Controller
{
    public function index()
    {
       return view('import');
    }

    public function export() 
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }
    
    public function import() 
    {
        Excel::import(new UsersImport,request()->file('file'));
             
        return back();
    }
}
