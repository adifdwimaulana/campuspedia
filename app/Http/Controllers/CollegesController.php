<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\College;
use App\Faculty;
use App\Major;
use App\Province;

class CollegesController extends Controller
{
    public function index()
    {
        $colleges = College::orderBy('nama_kampus', 'asc')->paginate(6);
        $provinces = Province::pluck('nama_provinsi');

        return view('colleges.index', compact('colleges', 'provinces'));
    }

    public function college() 
    {
        $colleges = College::orderBy('nama_kampus', 'asc')->get();
        return view('admin.colleges.college', compact('colleges'));
    }

    public function create_college()
    {
        return view('admin.colleges.create_college');
    }

    public function store_college(Request $request)
    {
        $this->validate($request, [
            'nama_kampus' => 'required',
            'profile_kampus' => 'required',
            'website_kampus' => 'required',
            'logo_kampus' => 'image|nullable|max:1999'
        ]);

        // Handling Upload Image
        if($request->hasFile('logo_kampus'))
        {
            // Get Filename with extension
            $filenameExtension = $request->file('logo_kampus')->getClientOriginalName();
            // Get Filename only
            $filename = pathinfo($filenameExtension, PATHINFO_FILENAME);
            // Get Extension only
            $extension = $request->file('logo_kampus')->getClientOriginalExtension();
            // Filename to store
            $filenameToStore = $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('logo_kampus')->storeAs('public/logo_kampus', $filenameToStore);
        } else {
            $filenameToStore = 'noimage.jpg';
        }

        // Save College into DB
        $college = new College;
        $college->nama_kampus = $request->input('nama_kampus');
        $college->profile_kampus = $request->input('profile_kampus');
        $college->alamat_kampus = $request->input('alamat_kampus');
        $college->website_kampus = $request->input('website_kampus');
        $college->tipe_kampus = $request->input('tipe_kampus');
        $college->akreditasi_kampus = $request->input('akreditasi_kampus');
        $college->logo_kampus = $filenameToStore;
        $college->save();

        return redirect('/admin/college')->with('message', 'Kampus '.$college->nama_kampus.' berhasil ditambahkan !');
    }

    public function edit_college($id)
    {   
        $college = College::find($id);

        return view('admin.colleges.edit_college', compact('college'));
    }

    public function update_college(Request $request, $id)
    {
        $this->validate($request, [
            'nama_kampus' => 'required',
            'profile_kampus' => 'required',
            'website_kampus' => 'required',
            'logo_kampus' => 'image|nullable|max:1999'
        ]);

        // Handling Upload Image
        if($request->hasFile('logo_kampus'))
        {
            // Get Filename with extension
            $filenameExtension = $request->file('logo_kampus')->getClientOriginalName();
            // Get Filename only
            $filename = pathinfo($filenameExtension, PATHINFO_FILENAME);
            // Get Extension only
            $extension = $request->file('logo_kampus')->getClientOriginalExtension();
            // Filename to store
            $filenameToStore = $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('logo_kampus')->storeAs('public/logo_kampus', $filenameToStore);
        }

        $college = College::find($id);
        $college->nama_kampus = $request->input('nama_kampus');
        $college->profile_kampus = $request->input('profile_kampus');
        $college->alamat_kampus = $request->input('alamat_kampus');
        $college->website_kampus = $request->input('website_kampus');
        $college->tipe_kampus = $request->input('tipe_kampus');
        $college->akreditasi_kampus = $request->input('akreditasi_kampus');
        if($request->hasFile('logo_kampus'))
        {
            $college->logo_kampus = $filenameToStore;
        }
        $college->save();

        return redirect('/admin/college')->with('message', 'Kampus '.$college->nama_kampus.' berhasil diedit !');
    }

    public function destroy_college($id)
    {
        $college = College::find($id);

        if($college->logo_kampus != 'noimage.jpg')
        {
            Storage::delete('public/logo_kampus/'.$college->logo_kampus);
        }

        $college->delete();

        return redirect('/admin/college')->with('message', 'Kampus '.$college->nama_kampus.' berhasil dihapus !');
    }
}
