<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Perusahaan;
use App\Loker;
use App\Lamaran;
use Auth;


class UserController extends Controller
{
    public function index()
    {
    	$perusahaan = Perusahaan::get();
    	return view('user.user',compact('perusahaan'));
    }
    public function detailLoker($id)
    {
    	$perusahaan = Perusahaan::find($id);
    	$loker = Loker::where('perusahaan_id',$id)->get();
    	return view('user.detail_loker',compact('perusahaan','loker'));
    }
    public function LokerDetail($id)
    {
    	$loker = Loker::find($id);
    	$perusahaan = Perusahaan::find($loker->perusahaan_id);
    	// dd($perusahaan_id);
    	
    	return view('user.loker_detail',compact('loker','perusahaan'));
    }
    public function addLamaran(Request $request)
    {
    	
    	$lamaran = New Lamaran;
    	$lamaran->user_id = $request->user_id;
    	$lamaran->perusahaan_id = $request->perusahaan_id;
    	$lamaran->loker_id = $request->loker_id;
    	$lamaran->nim = $request->nim;
    	$lamaran->no_hp = $request->no_hp;
    	// upload file
    	 $file = $request->file('upload');
            $nama_file = $request->nim.".".$file->getClientOriginalExtension();
            $tujuan_upload = 'upload';
            $file->move($tujuan_upload,$nama_file);

        $lamaran->upload = $nama_file;
        $lamaran->status= 'pending';
        $lamaran->save();
        return redirect('/user/lamaran')->with('status', 'Loker Berhasil ditambahkan');
    }
    public function daftarLamaran()
    {
        $user = Auth::user()->id;
        $lamaran = Lamaran::where('user_id',$user)->get();
        return view('user.lamaran',compact('lamaran'));
    }
}
