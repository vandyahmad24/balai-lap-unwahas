<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Perusahaan;
use App\Loker;
use App\Lamaran;

class AdminController extends Controller
{
    public function index()
    {
    	$perusahaan = Perusahaan::get();
    	return view('admin.admin',compact('perusahaan'));
    }
    public function Company()
    {
    	return view('admin.add_company');
    }
    public function addCompany(Request $request)
    {
    	Perusahaan::create([
    		'nama' => $request->nama,
    		'alamat' => $request->alamat,
    		'deskripsi' => $request->deskripsi,
    		'status' => 'tutup',
    		'no_hp' => $request->no_hp
    	]);
    	return redirect('/admin')->with('status', 'Perusahaan Berhasil ditambahkan');
    }
    public function editCompany($id)
    {
    	$perusahaan = Perusahaan::find($id);
    	return view('admin.edit_company',compact('perusahaan'));
    }
    public function putCompany(Request $request)
    {
    	$perusahaan = Perusahaan::find($request->perusahaan_id);
    	$perusahaan->nama = $request->nama;
    	$perusahaan->alamat = $request->alamat;
    	$perusahaan->deskripsi = $request->deskripsi;
    	$perusahaan->status = $request->status;
    	$perusahaan->no_hp = $request->no_hp;
    	$perusahaan->save();
    	return redirect('/admin')->with('status', 'Perusahaan Berhasil diupdate');
    	
    }
    public function addLoker($id)
    {
    	$perusahaan_id = $id;
    	return view('admin.add_loker',compact('perusahaan_id'));
    }
    public function tambahLoker(Request $request)
    {
       
    	$loker = New Loker;
        $loker->perusahaan_id = $request->perusahaan_id;
        $loker->judul = $request->judul;
        $loker->job_dec = $request->deskripsi;
        $loker->end_time = $request->end_time;
        $loker->save();
    	return redirect('/admin/daftar-loker')->with('status', 'Loker Berhasil ditambahkan');
    }
    public function daftarLoker()
    {
    	$loker = Loker::orderBy('id','desc')->get();
    	return view('admin.daftar_loker',compact('loker'));
    }
    public function editLoker($id)
    {
    	$loker = Loker::find($id);
    	return view('admin.edit_loker',compact('loker'));
    }
    public function putLoker(Request $request)
    {
    	$loker = Loker::find($request->id_loker);
        $loker->judul = $request->judul;
    	$loker->perusahaan_id=$request->id_perusahaan;
    	$loker->job_dec = $request->deskripsi;
    	$loker->end_time = $request->end_time;
    	$loker->save();
    	return redirect('/admin/daftar-loker')->with('status', 'Loker Berhasil di ubah');
    }
    public function deleteLoker($id)
    {
    	$loker = Loker::find($id);
    	$loker->delete();
    	return redirect('/admin/daftar-loker')->with('delete', 'Loker Berhasil di delete');
    }
    public function daftarLamaran()
    {
       $lamaran=Lamaran::all();
       return view('admin.lamaran',compact('lamaran'));
    }
    public function editLamaran($id)
    {
        $lamaran=Lamaran::find($id);
       return view('admin.edit_lamaran',compact('lamaran'));
    }
    public function putLamaran(Request $request)
    {
        $lamaran = Lamaran::find($request->lamaran_id);
        $lamaran->status= $request->status;
        $lamaran->save();
        return redirect('/admin/daftar-lamaran')->with('status', 'Lamaran Berhasil di update');

    }
}
