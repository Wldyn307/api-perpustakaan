<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use APP\Models\SiswaM;
class SiswaC extends Controller
{
   function index(){
    $siswa = SiswaM::all();
   } 
}
