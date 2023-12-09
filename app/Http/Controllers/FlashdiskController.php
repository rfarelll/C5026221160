<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FlashdiskController extends Controller
{
    public function index()
	{
    	// mengambil data dari table pegawai
		//$pegawai = DB::table('pegawai')->get();
        $flashdisk = DB::table('flashdisk')->get();
    	// mengirim data pegawai ke view index
		return view('indexflashdisk',['flashdisk' => $flashdisk]);

	}
    public function tambah()
	{

		// memanggil view tambah
		return view('tambahflashdisk');

	}
    public function store(Request $request)
	{
		// insert data ke table pegawai
		DB::table('flashdisk')->insert([
			'merkflashdisk' => $request->merkflashdisk,
			'stockflashdisk' => $request->stockflashdisk,
			'tersedia' => $request->tersedia
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/flashdisk');

	}
}
