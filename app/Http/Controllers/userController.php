<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\berkas;

class userController extends Controller
{
    public function show(Request $request){
    	$berkas = new Berkas;
       	//ID Berkas
    	$id_berkas = DB::table('berkas')->max('id_berkas');
    	$berkas->id_berkas = ($id_berkas+1);

        //NRP
        $berkas->id_peserta = $request->nrp;

    	//ID Pelatihan
    	$id_pelatihan = DB::table('pelatihan')->where('nama_pelatihan',$request->pelatihan)->value('id_pelatihan');
    	echo $id_pelatihan . "<br>";
    	$berkas->id_pelatihan = $id_pelatihan;

    	//Path Berkas


    	//Status Berkas
    	$status_pelatihan = DB::table('pelatihan')->where('nama_pelatihan',$request->pelatihan)->value('syarat_berkas');
    	$strlen = strlen($status_pelatihan);
    	$counter = 0;
    	$status_berkas = "0";
    	for($i=0; $i<=$strlen; $i++){
    		$char = substr($status_pelatihan, $i, 1);    		
    		if($char == ','){
    			$status_berkas .= ",0";
    		}
    	}
    	echo $status_berkas . "<br>";
    	$berkas->status_berkas = $status_berkas;

    	//

    	$berkas->save();
    	return ;
    }
}
