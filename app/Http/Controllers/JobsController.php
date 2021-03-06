<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Negara;
use App\Kota;
use App\Perusahaan;
use App\Job;
use App\Type_industri;
use App\Jobs_function;
use App\Jobs_role;
use App\Pendidikan;
use App\Company;
use App\User;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Storage;
use Auth;
use DB;

class JobsController extends Controller
{
	public function __construct()
    {

    }

    public function dashboard()
    {
        return view('company.jobs.dashboard');
    }
    
    public function perusahaan()
    {
        $user = Auth::guard('company')->user()->email;
        // dd($user); return;
    	$negara = Negara::orderBy('nama_negara','asc')->get();
    	$tipe_industri = Type_industri::orderBy('nama_industri','asc')->get();
    	return view('company.jobs.perusahaan', compact('negara', 'tipe_industri'));
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
        $user = Auth::guard('company')->user()->id;

        $post = new Perusahaan;
        $post->id_user = $user;
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
        // return Redirect::back()->with('message','Perusahaan '.$post->nama_perusahaan.' berhasil ditambahkan');
        return redirect('company/view_all_perusahaan/')->with('message','Perusahaan '.$post->nama_perusahaan.' berhasil ditambahkan');  
    }

    public function view_all_perusahaan()
    {
        // $user = Auth::guard('company')->user();
        $perusahaan = Perusahaan::where('id_user', '=', Auth::guard('company')->user()->id)->get();
        return view('company.jobs.perusahaan_all', compact('perusahaan'));
    }

    public function show_perusahaan($id)
    {
        $perusahaan = Perusahaan::find($id);
        return view('company.jobs.perusahaan_lihat', compact('perusahaan'));
    }

    public function edit_perusahaan($id)
    {
        $perusahaan = Perusahaan::find($id);
        $negara = Negara::orderBy('nama_negara','asc')->get();
        $tipe_industri = Type_industri::orderBy('nama_industri','asc')->get();
        return view('company.jobs.perusahaan_edit', compact('perusahaan','negara','tipe_industri'));
    }

    public function post_edit_perusahaan(Request $r)
    {
        $validator = Validator::make($r->all(), [
            // 'nama_perusahaan' => 'required',
            // 'deskripsi' => 'required',
        ]);
        if($validator->fails()) {
            return Redirect::back()->withInput()->withErrors($validator->messages());
        }

        $post = perusahaan::find($r->id);
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
        return redirect('company/view_all_perusahaan/')->with('message','Perusahaan '.$post->nama_perusahaan.' berhasil diedit');  
    }

    public function hapus_perusahaan($id)
    {
        $perusahaan = perusahaan::find($id);
        $nama_perusahaan = $perusahaan->nama_perusahaan;
        $perusahaan->delete();
        return redirect('company/view_all_perusahaan/')->with('message','Perusahaan '.$nama_perusahaan.' berhasil dihapus');  
    }

    public function pekerjaan()
    {
    	$kota = DB::table('kotas')
	        ->select('kotas.id','kotas.nama_kota','negaras.nama_negara')
	        ->join('negaras', 'negaras.id', '=', 'kotas.negara_id')
	        ->orderBy('kotas.nama_kota','asc')
	        ->get();
	    $pendidikan = Pendidikan::all();
	    $jobs_role = DB::table('jobs_roles')
	        ->select('jobs_roles.id','jobs_roles.jobs_role','jobs_functions.jobs_functions')
	        ->join('jobs_functions', 'jobs_roles.jobs_function_id', '=', 'jobs_functions.id')
	        ->orderBy('jobs_roles.jobs_role','asc')
	        ->get();
    	$tipe_industri = Type_industri::orderBy('nama_industri','asc')->get();
    	return view('company.jobs.jobs', compact('kota', 'tipe_industri', 'pendidikan', 'jobs_role'));
    }

    public function simpan_pekerjaan(Request $r)
    {
    	$kota = Kota::find($r->kota);
    	$negara = Negara::find($kota->negara_id);
    	$jobs_role = Jobs_role::find($r->jobs_role);
    	$jobs_functions = Jobs_function::find($jobs_role->jobs_function_id);

    	$validator = Validator::make($r->all(), [
            // 'nama_perusahaan' => 'required',
            // 'deskripsi' => 'required',
        ]);
        if($validator->fails()) {
            return Redirect::back()->withInput()->withErrors($validator->messages());
        }
        $user = Auth::guard('company')->user()->id;

        $post = new Job;
        $post->id_user = $user;
        $post->id_perusahaan = 0;
        $post->job_title = $r->input('nama_pekerjaan');
        $post->kota = $kota->nama_kota;
        $post->negara = $negara->nama_negara;
        $post->tipe_pekerjaan = $r->input('tipe_industri');
        $post->minimal_education = $r->input('minimal_education');
        $post->jobs_roles = $jobs_role->jobs_role;
        $post->jobs_functions = $jobs_functions->jobs_functions;
        $post->jobs_description = $r->input('deskripsi');
        $post->work_experience = $r->input('work_experience');
        $post->jumlah_loker = $r->input('jumlah_loker');
        $post->benefit = $r->input('benefit');
        $post->skill = $r->input('skill');
        $post->remote= $r->input('remote');
        $post->gaji_tampil= $r->input('gaji_tampil');
        $post->gaji= $r->input('gaji');
        $post->bonus_salary= $r->input('bonus_salary');
        if ($r->file('file_attachment')) {
            $post->file_attachment = $r->file('file_attachment')->store('file_attachment');   
        }
        $post->save();
        return Redirect::back()->with('message','Lowongan Pekerjaan '.$post->job_title.' berhasil ditambahkan');
    }

    public function view_all_pekerjaan()
    {
        // $user = Auth::guard('company')->user();
        $perusahaan = Job::where('id_user', '=', Auth::guard('company')->user()->id)->get();
        // dd($perusahaan); return;
        return view('company.jobs.jobs_all', compact('perusahaan'));
    }

    public function hapus_pekerjaan($id)
    {
        $perusahaan = Job::find($id);
        $nama_perusahaan = $perusahaan->job_title;
        $perusahaan->delete();
        return redirect('company/view_all_pekerjaan/')->with('message','Pekerjaan '.$nama_perusahaan.' berhasil dihapus');  
    }

    public function show_pekerjaan($id)
    {
        $perusahaan = Job::find($id);
        dd($perusahaan); return;
        return view('company.jobs.jobs_lihat', compact('perusahaan'));
    }

    public function edit_pekerjaan($id)
    {
        $perusahaan = Job::find($id);
        $kota = DB::table('kotas')
            ->select('kotas.id','kotas.nama_kota','negaras.nama_negara')
            ->join('negaras', 'negaras.id', '=', 'kotas.negara_id')
            ->orderBy('kotas.nama_kota','asc')
            ->get();
        $pendidikan = Pendidikan::all();
        $jobs_role = DB::table('jobs_roles')
            ->select('jobs_roles.id','jobs_roles.jobs_role','jobs_functions.jobs_functions')
            ->join('jobs_functions', 'jobs_roles.jobs_function_id', '=', 'jobs_functions.id')
            ->orderBy('jobs_roles.jobs_role','asc')
            ->get();
        $tipe_industri = Type_industri::orderBy('nama_industri','asc')->get();
        // dd($perusahaan); return;    
        return view('company.jobs.jobs_edit', compact('perusahaan','kota','pendidikan','tipe_industri','jobs_role'));
    }
}
