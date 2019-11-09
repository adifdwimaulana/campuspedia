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

    public function search(Request $request)
    {
        $result = College::query();

        $nama_kampus = $request->nama_kampus;
        $nama_jurusan = $request->nama_jurusan;
        $id_provinsi = $request->id_provinsi;
        $current_college = College::where('nama_kampus', 'like', '%'.$nama_kampus.'%')->get();
        $college_id = $current_college[0]->id;

        // dd($college_id);

        if(!empty($nama_kampus) && !empty($id_provinsi)) {
            $result = College::where('nama_kampus', 'like', '%'.$nama_kampus.'%')
                        ->where('province_id', $id_provinsi);
        }

        else if(!empty($nama_kampus) && !empty($nama_jurusan)) {
            $result = Major::where('nama_jurusan', 'like', '%'.$nama_jurusan.'%')
                        ->where('college_id', $college_id);
        }

        else if(!empty($nama_jurusan)) {
            $result = Major::where('nama_jurusan', 'like', '%'.$nama_jurusan.'%');
        }

        else if(!empty($nama_jurusan) && !empty($id_provinsi)) {
            $result = Major::where('nama_jurusan', 'like', '%'.$nama_jurusan.'%')
                        ->where('province_id', $id_provinsi);
        }

        else if(!empty($id_provinsi)) {
            $result = College::where('province_id', $id_provinsi);
        } 
        
        $result = $result->get();
        dd($result);

        // return view('colleges.search_result', compact('nama_kampus', 'nama_jurusan', 'nama_provinsi'));
    }

    public function detail_college($id)
    {
        $college = College::find($id);
        
        return view('colleges.detail_college', compact('college'));
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
        $akreditasis = Akreditasi::all();
        $tipe_colleges = Tipe_college::all();
        $provinces = Province::all();

        return view('admin.colleges.edit_college', compact('college', 'tipe_colleges', 'akreditasis', 'provinces'));
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
        $college->tipe_kampus_id = $request->input('tipe_kampus');
        $college->akreditasi_id = $request->input('akreditasi_kampus');
        $college->province_id = $request->input('province');
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
            Storage::delete('storage/public/logo_kampus/'.$college->logo_kampus);
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

    public function major()
    {
        $majors = Major::orderBy('nama_jurusan', 'asc')->get();

        return view('admin.colleges.major', compact('majors'));
    }

    public function create_major()
    {
        $colleges = College::orderBy('nama_kampus', 'asc')->get();

        return view('admin.colleges.create_major', compact('colleges', 'faculties'));
    }

    public function faculty_list(Request $request)
    {
        $faculties = Faculty::where('college_id', $request->college_id)->orderBy('nama_fakultas', 'asc')->get();

        return response()->json($faculties);
    }

    public function store_major(Request $request)
    {
        $this->validate($request, [
            'nama_jurusan' => 'required',
            'deskripsi_jurusan' => 'required',
            'daya_tampung' => 'required',
            'nama_kampus' => 'required',
            'nama_fakultas' => 'required'
        ]);

        $major = new Major;
        $major->nama_jurusan = $request->input('nama_jurusan');
        $major->deskripsi_jurusan = $request->input('deskripsi_jurusan');
        $major->daya_tampung = $request->input('daya_tampung');
        $major->faculty_id = $request->input('nama_fakultas');
        $major->college_id = $request->input('nama_kampus');

        $current_college = College::where('id', $major->college_id)->get();
        $province_id = $current_college[0]->province_id;

        $major->province_id = $province_id;
        $major->save();

        return redirect('/admin/major')->with('message', 'Jurusan '. $major->nama_jurusan.' berhasil ditambahkan !');
    }

    public function edit_major($id)
    {
        $major = Major::find($id);
        $faculties = Faculty::all();
        $colleges = College::orderBy('nama_kampus', 'asdc')->get();

        return view('admin.colleges.edit_major', compact('major', 'faculties', 'colleges'));
    }

    public function update_major(Request $request, $id)
    {
        $this->validate($request, [
            'nama_jurusan' => 'required',
            'deskripsi_jurusan' => 'required',
            'daya_tampung' => 'required',
            'nama_kampus' => 'required',
            'nama_fakultas' => 'required'
        ]);

        $major = Major::find($id);
        $major->nama_jurusan = $request->input('nama_jurusan');
        $major->deskripsi_jurusan = $request->input('deskripsi_jurusan');
        $major->daya_tampung = $request->input('daya_tampung');
        $major->faculty_id = $request->input('nama_fakultas');
        $major->college_id = $request->input('nama_kampus');
        $major->save();

        return redirect('/admin/major')->with('message', 'Jurusan '. $major->nama_jurusan.' berhasil ditambahkan !');
    }

    public function destroy_major($id)
    {
        $major = Major::find($id);
        $major->delete();

        return redirect('/admin/major')->with('message', 'Jurusan '. $major->nama_jurusan.' berhasil dihapus!');
    }
}
