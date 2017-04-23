<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index()
    {
    	$title = 'Data pegawai'; // data yang akan kita kirim ke views
    	
    	return view('home.index3', compact('title'));
    }
}
