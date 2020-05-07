<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class mahasiswaController extends Controller
{
    public function index()
    {
    	
    	$data_mahasiswa = DB::table('mahasiswa')->get();
 
    	
    	return view('welcome_backend',['data_mahasiswa' => $data_mahasiswa]);
 
    }
    public function frontend()
    {
        
        $data_mahasiswa = DB::table('mahasiswa')->get();
 
        
        return view('welcome',['data_mahasiswa' => $data_mahasiswa]);
 
    }
    public function tambah()
    {
    	
    	
 
    	
    	return view('welcome_tambah');
 
    }
    public function tambah_proses(Request $request)
    {
    	DB::table('mahasiswa')->insert([
		'nim' => $request->nim,
		'nama' => $request->nama,
		'tgl_lahir' => $request->tgl_lahir,
		'alamat' => $request->alamat,
		'notelp'=>$request->notelp
	]);
	
	return redirect('/mahasiswa');
    }
    public function edit($id)
    {
    	$mahasiswa = DB::table('mahasiswa')->where('id',$id)->get();
	
		return view('welcome_edit',['data_mahasiswa' => $mahasiswa]);
    }
    public function update(Request $request)
    {
    	DB::table('mahasiswa')->where('id',$request->id)->update([
		'nim' => $request->nim,
		'nama' => $request->nama,
		'tgl_lahir' => $request->tgl_lahir,
		'alamat' => $request->alamat,
		'notelp'=>$request->notelp
		]);
		
		return redirect('/mahasiswa');
    }
    public function hapus($id)
    {
    	DB::table('mahasiswa')->where('id',$id)->delete();
		
		return redirect('/mahasiswa');
   
}

}
