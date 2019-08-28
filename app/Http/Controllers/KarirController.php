<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Kategori_karir;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use App\Karir;

class KarirController extends Controller
{
    public function kategori()
    {
        return view('admin.karir.kategori');
    }

    public function store_kategori(Request $request)
    {
    	$validator = Validator::make($request->all(), [
            // 'nama_kategori' => 'required',
            // 'gambar' => 'image|nullable|max:1999'

        ]);
        if($validator->fails()) {
            return Redirect::back()->withInput()->withErrors($validator->messages());
        }

        // Handling Upload Image
        if($request->hasFile('gambar'))
        {
            // Get Filename with extension
            $filenameExtension = $request->file('gambar')->getClientOriginalName();
            // Get Filename only
            $filename = pathinfo($filenameExtension, PATHINFO_FILENAME);
            // Get Extension only
            $extension = $request->file('gambar')->getClientOriginalExtension();
            // Filename to store
            $filenameToStore = $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('gambar')->storeAs('public/gambar', $filenameToStore);
        } else {
            $filenameToStore = 'noimage.jpg';
        }

        $post = new Kategori_karir;
        $post->nama_kategori_karir = $request->input('nama_kategori');
        $post->gambar_kategori = $filenameToStore;
        $post->save();
        return Redirect::back()->with('message','Kategori '.$post->nama_kategori_karir.' berhasil ditambahkan');
    }

    public function karir()
    {
        return view('admin.karir.karir');
    }

    public function store_karir(Request $request)
    {
        $validator = Validator::make($request->all(), [
            // 'nama_karir' => 'required',
            // 'gambar' => 'image|nullable|max:1999'

        ]);
        if($validator->fails()) {
            return Redirect::back()->withInput()->withErrors($validator->messages());
        }

        // Handling Upload Image
        if($request->hasFile('gambar'))
        {
            // Get Filename with extension
            $filenameExtension = $request->file('gambar')->getClientOriginalName();
            // Get Filename only
            $filename = pathinfo($filenameExtension, PATHINFO_FILENAME);
            // Get Extension only
            $extension = $request->file('gambar')->getClientOriginalExtension();
            // Filename to store
            $filenameToStore = $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('gambar')->storeAs('public/gambar', $filenameToStore);
        } else {
            $filenameToStore = 'noimage.jpg';
        }

        $post = new Karir;
        $post->title = $request->input('nama_karir');
        $post->profesi_terkait = $request->input('profesi');
        $post->kisaran_pendapatan = $request->input('kisaran');
        $post->kualifikasi = $request->input('kualifikasi');
        $post->keahlian_yg_dibutuhkan = $request->input('keahlian');
        $post->instansi_pekerjaan = $request->input('instansi');
        $post->deskripsi_karir = $request->input('deskripsi');
        $post->gambar_terkait_karir = $filenameToStore;
        $post->save();
        return Redirect::back()->with('message','Karir '.$post->title.' berhasil ditambahkan');
    }
}
