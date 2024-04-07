<?php

namespace App\Http\Controllers;

use App\Models\Addnew;
use App\Models\Excelimport;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class DashboardController extends Controller
{
   public function index()
   {
      if (\request()->ajax()) {
         $data = Excelimport::latest()->get();
         return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {
               $actionBtn = '<a href="javascript:void(0)" class="edit btn btn-success btn-sm">Edit</a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
               return $actionBtn;
            })
            ->rawColumns(['action'])
            ->make(true);
      }
      $addnew = Addnew::all();
      $import = Excelimport::paginate(10);
      return view('dashboard', compact('import','addnew'));
   }
}
