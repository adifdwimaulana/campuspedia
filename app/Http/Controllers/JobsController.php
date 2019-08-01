<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Negara;
use App\Perusahaan;
use App\Type_industri;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Storage;
use Illuminate\Support\Facades\Auth;
use DB;

class JobsController extends Controller
{
	public function __construct()
     {

     }

    public function perusahaan()
    {
    	$negara = Negara::orderBy('nama_negara','asc')->get();
    	$tipe_industri = Type_industri::orderBy('nama_industri','asc')->get();
    	return view('admin.jobs.perusahaan', compact('negara', 'tipe_industri'));
    	// echo "string";return;
    }

    public function simpan_perusahaan(Request $r)
    {
    	$validator = Validator::make($r->all(), [
            'nama_perusahaan' => 'required',
            'deskripsi' => 'required',
        ]);
        if($validator->fails()) {
            return Redirect::back()->withInput()->withErrors($validator->messages());
        }
        $post = new Perusahaan;
        $post->nama_perusahaan = $r->input('nama_perusahaan');
        $post->visi_misi = $r->input('visi_misi');
        $post->deskripsi_perusahaan = $r->input('deskripsi');
        $post->alamat_perusahaan = $r->input('alamat');
        $post->negara = $r->input('negara');
        $post->tipe_industri = $r->input('tipe_industri');
        $post->link_website = $r->input('website');
        $post->link_facebook = $r->input('facebook');
        $post->link_linkedin = $r->input('LinkedIn');
        $post->link_instagram = $r->input('instagram');
        $post->link_twitter= $r->input('twitter');
        if ($r->file('logo')) {
            $post->logo_perusahaan = $r->file('logo')->store('logo');   
        }
        $post->save();
        return Redirect::back()->with('message','Perusahaan '.$post->nama_perusahaan.' berhasil ditambahkan');
    }
}
