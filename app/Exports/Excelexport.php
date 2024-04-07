<?php

namespace App\Exports;

use App\Models\ExcelExport as ModelsExcelExport;
use App\Models\Excelimport;
use Maatwebsite\Excel\Concerns\FromCollection;

class Excelexport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        // 
        return Excelimport::all();
    }
}
