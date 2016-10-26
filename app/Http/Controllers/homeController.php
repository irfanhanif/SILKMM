<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
//use App\pelatihan;

class homeController extends Controller
{
    //
    public function show(){
    	$data_pelatihan = DB::table('pelatihan')->get();

    	return $data_pelatihan;
    }

    public function daftar(Request $request){
    	$nama_pelatihan = $request->nama_pelatihan;
    	$no_pelatihan = $request->no_pelatihan;

    	return view('pendaftaran.register', [
    		'nama_p elatihan' => $nama_pelatihan,
    		'no_paletihan' => $no_pelatihan]);
    }

    public function status(Request $request){
    	$no_pelatihan = $request->no_pelatihan;
    	$berkas = DB::table('berkas')->where('id_pelatihan',$no_pelatihan)->get();

    	return view('pendaftaran.register', ['berkas' => $berkas]);
    }
}
