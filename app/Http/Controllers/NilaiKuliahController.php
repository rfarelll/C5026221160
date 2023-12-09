<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NilaiKuliahController extends Controller
{
    public function index()
	{
    	// mengambil data dari table pegawai
		//$pegawai = DB::table('pegawai')->get();
        $nilaikuliah = DB::table('nilaikuliah')->get();
    	// mengirim data pegawai ke view index
		return view('indexnilai',['nilaikuliah' => $nilaikuliah]);

	}
    public function tambah()
	{

		// memanggil view tambah
		return view('tambahnilai');

	}
    public function store(Request $request)
	{
		// insert data ke table pegawai
		DB::table('nilaikuliah')->insert([
			'NRP' => $request->NRP,
			'NilaiAngka' => $request->NilaiAngka,
			'SKS' => $request->SKS
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/nilaikuliah');

	}
}
