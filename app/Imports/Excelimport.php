<?php

namespace App\Imports;

use App\Models\Excelimport as ModelsExcelimport;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class Excelimport implements ToCollection,WithHeadingRow
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $rows)
    {
        foreach ($rows as $row) 
        {
           ModelsExcelimport ::create([
                'name' => $row['name'],
                'email' => $row['email'],
                'number' => $row['number'],
                'address' => $row['address'],
            ]);
        }
    }
}
