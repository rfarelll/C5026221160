<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    //
    // public function index(){
    //     $a = 4909890 ;
    //     $b = 5;
    //     $c = $a * $b;
    //     return "<h1> Hasil Perkalian = " . $c . "</h1>" ;
    // }
    // public function biodata(){
    // 	$nama = "Diki Alfarabi Hadi";
    //     $alamat = "Ambon";
    // 	$umur = 18;
    // 	return view('biodata',['nama' => $nama , 'alamat' => $alamat , 'umur' => $umur]);
    // }

    public function showtime($jam){
        return $jam;
    }
    public function formulir(){

    	return view('formulir');
}
public function proses(Request $request){
    $nama = $request->input('nama');
     $alamat = $request->input('alamat');
     $ipk = $request->input('ipk');
    return "Nama : ".$nama.", Alamat : ".$alamat. "IPK : ".$ipk. ". isi asli : ". $request;
}


}
