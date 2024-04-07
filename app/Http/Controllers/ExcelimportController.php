<?php

namespace App\Http\Controllers;

use App\Exports\Excelexport;
use App\Imports\Excelimport;
use App\Models\Excelimport as ModelsExcelimport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ExcelimportController extends Controller
{
  //
  public function create()
  {
    $import = ModelsExcelimport::all();
    return view('Excelimport.create', compact('import'));
  }
  public function excelimport(Request $request)
  {
    $request->validate([
      'import' => ['required', 'file'],
    ]);
    Excel::import(new Excelimport, $request->file('import'));
    return view('dashboard');
  }

  public function destroy(ModelsExcelimport $import, $id)
  {
    $import = ModelsExcelimport::find($id);
    $import->destroy($id);
    return redirect('/dashboard');
  }
  public function export()
  {
    $export = "users.xlsx";
    return Excel::download(new Excelexport, $export);
  }
}
