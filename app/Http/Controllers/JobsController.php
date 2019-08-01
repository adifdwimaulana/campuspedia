<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Negara;
use App\Type_industri;

class JobsController extends Controller
{
    public function perusahaan()
    {
    	$negara = Negara::orderBy('nama_negara','asc')->get();
    	$tipe_industri = Type_industri::orderBy('nama_industri','asc')->get();
    	return view('admin.jobs.perusahaan', compact('negara', 'tipe_industri'));
    	// echo "string";return;
    }
}
