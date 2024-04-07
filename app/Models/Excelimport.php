<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Excelimport extends Model
{
    use HasFactory;
     protected $table = 'excelimports';

     protected $fillable = ['name','email','number','address'];
}
