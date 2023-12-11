<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    public function index()
	{
    	// mengambil data dari table flashdisk
		//$flashdisk = DB::table('flashdisk')->get();
        $kategori = DB::table('kategori')->get();
    	// mengirim data flashdisk ke view index
		return view('indexkategori',['kategori' => $kategori]);
    }
    public function hasil(Request $request)
    {
        // Get the selected ID from the form submission
        $selectedID = $request->input('kategori');

        // Fetch the corresponding record from the database
        $kategori = DB::table('kategori')->where('ID', $selectedID)->first();

        // Return the selected record to the view
        return view('viewkategori', ['kategori' => $kategori]);
    }
}
