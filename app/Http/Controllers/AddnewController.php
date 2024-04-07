<?php

namespace App\Http\Controllers;

use App\Models\Addnew;
use Illuminate\Http\Request;

class AddnewController extends Controller
{
 public function create(){
    return view('Addnew.create');
 }

 public function store(Addnew $addnew,Request $request){
  $addnew = Addnew::create([
    'name' => $request->name,
    'email' => $request->email,
    'number' => $request->number,
    'address' => $request->address,
  ]);
  return redirect('/addnew');
 }
}
