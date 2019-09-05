<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\College;
use App\Faculty;
use App\Major;
use App\Province;
use App\Akreditasi;
use App\Tipe_college;

class CollegesController extends Controller
{
    public function index()
    {
        $colleges = College::orderBy('nama_kampus', 'asc')->paginate(6);
        $provinces = Province::all();

        return view('colleges.index', compact('colleges', 'provinces'));
    }

    public function show_college($id)
    {
        $college = College::find($id);
        $faculties = $college->faculties;

        return view('colleges.show_college', compact('college', 'faculties'));    
    }

    public function college() 
    {
        $colleges = College::orderBy('nama_kampus', 'asc')->get();

        return view('admin.colleges.college', compact('colleges', 'faculties'));
    }

    public function create_college()
    {
        $provinces = Province::orderBy('nama_provinsi')->get();
        $akreditasis = Akreditasi::all();
        $tipe_colleges = Tipe_college::all();

        return view('admin.colleges.create_college', compact('provinces', 'akreditasis', 'tipe_colleges'));
    }

    public function store_college(Request $request)
    {
        $this->validate($request, [
            'nama_kampus' => 'required',
            'profile_kampus' => 'required',
            'alamat_kampus' => 'required',
            'website_kampus' => 'required',
            'tipe_kampus' => 'required',
            'akreditasi_kampus' => 'required',
            'province' => 'required',
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
        $college->tipe_kampus_id = $request->input('tipe_kampus');
        $college->akreditasi_id = $request->input('akreditasi_kampus');
        $college->province_id = $request->input('province');
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

    public function faculty()
    {
        $faculties = Faculty::orderBy('nama_fakultas', 'asc')->get();

        return view('admin.colleges.faculty', compact('faculties'));
    }

    public function create_faculty()
    {
        $colleges = College::orderBy('nama_kampus', 'asc')->get();

        return view('admin.colleges.create_faculty', compact('colleges'));
    }

    public function store_faculty(Request $request)
    {
        $this->validate($request, [
            'nama_fakultas' => 'required',
            'deskripsi_fakultas' => 'required',
            'jumlah_jurusan' => 'required',
            'nama_kampus' => 'required'
        ]);

        $faculty = new Faculty;
        $faculty->nama_fakultas = $request->input('nama_fakultas');
        $faculty->deskripsi_fakultas = $request->input('deskripsi_fakultas');
        $faculty->jumlah_jurusan = $request->input('jumlah_jurusan');
        $faculty->college_id =  $request->input('nama_kampus');
        $faculty->save();

        return redirect('/admin/faculty')->with('message', 'Fakultas '. $faculty->nama_fakultas.' berhasil ditambahkan !');
    }

    public function edit_faculty($id)
    {
        $faculty = Faculty::find($id);
        $colleges = College::orderBy('nama_kampus', 'asc')->get();
        
        return view('admin.colleges.edit_faculty', compact('faculty', 'colleges'));
    }

    public function update_faculty(Request $request, $id)
    {
        $this->validate($request, [
            'nama_fakultas' => 'required',
            'deskripsi_fakultas' => 'required',
            'jumlah_jurusan' => 'required',
            'nama_kampus' => 'required'
        ]);

        $faculty = Faculty::find($id);
        $faculty->nama_fakultas = $request->input('nama_fakultas');
        $faculty->deskripsi_fakultas = $request->input('deskripsi_fakultas');
        $faculty->jumlah_jurusan = $request->input('jumlah_jurusan');
        $faculty->college_id = $request->input('nama_kampus');
        $faculty->save();

        return redirect('/admin/faculty')->with('message', 'Fakultas '.$faculty->nama_fakultas.' berhasil diedit !');
    }

    public function destroy_faculty($id)
    {
        $faculty = Faculty::find($id);
        $faculty->delete();

        return redirect('/admin/faculty')->with('message', 'Fakultas '.$faculty->nama_fakultas.' berhasil ditambahkan !');
    }
}
