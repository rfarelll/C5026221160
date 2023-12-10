<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FlashdiskController extends Controller
{
    public function index()
	{
    	// mengambil data dari table flashdisk
		//$flashdisk = DB::table('flashdisk')->get();
        $flashdisk = DB::table('flashdisk')->get();
    	// mengirim data flashdisk ke view index
		return view('indexflashdisk',['flashdisk' => $flashdisk]);

	}
    public function tambah()
	{

		// memanggil view tambah
		return view('tambahflashdisk');

	}
    public function store(Request $request)
	{
		// insert data ke table flashdisk
		DB::table('flashdisk')->insert([
			'merkflashdisk' => $request->merkflashdisk,
			'stockflashdisk' => $request->stockflashdisk,
			'tersedia' => $request->tersedia
		]);
		// alihkan halaman ke halaman flashdisk
		return redirect('/flashdisk');

	}
    	// method untuk edit data flashdisk
	public function edit($kodeflashdisk)
	{
		// mengambil data flashdisk berdasarkan kodeflashdisk yang dipilih
		$flashdisk = DB::table('flashdisk')->where('kodeflashdisk',$kodeflashdisk)->get();
		// passing data flashdisk yang didapat ke view edit.blade.php
		return view('editflashdisk',['flashdisk' => $flashdisk]);

	}

	// update data flashdisk
	public function update(Request $request)
	{
		// update data flashdisk
		DB::table('flashdisk')->where('kodeflashdisk',$request->kodeflashdisk)->update([
			'merkflashdisk' => $request->merkflashdisk,
			'stockflashdisk' => $request->stockflashdisk,
			'tersedia' => $request->tersedia,
		]);
		// alihkan halaman ke halaman flashdisk
		return redirect('/flashdisk');
	}

	// method untuk hapus data flashdisk
	public function hapus($kodeflashdisk)
	{
		// menghapus data flashdisk berdasarkan kodeflashdisk yang dipilih
		DB::table('flashdisk')->where('kodeflashdisk',$kodeflashdisk)->delete();

		// alihkan halaman ke halaman flashdisk
		return redirect('/flashdisk');
	}
    public function view($kodeflashdisk)
    {
        	// mengambil data dari table flashdisk sesuai pencarian data
		$flashdisk = DB::table('flashdisk')
		->where('kodeflashdisk', $kodeflashdisk)
		->get();

    		// mengirim data flashdisk ke view index
		return view('viewflashdisk',['flashdisk' => $flashdisk]);
    }
}
