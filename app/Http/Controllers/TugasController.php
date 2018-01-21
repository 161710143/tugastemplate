<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\siswa;

class TugasController extends Controller
{
     public function tabel()
    {
    	$dono = siswa::all();
    	return view('tabel', compact('dono'));
    }
}
