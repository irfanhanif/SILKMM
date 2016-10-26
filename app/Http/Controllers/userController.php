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
       	$id_berkas = DB::table('berkas')->max('id_berkas');
        $nrp = $request->$nrp;
        $no_pelatihan = $request->no_pelatihan;
        $status_pelatihan = DB::table('pelatihan')->where('id_pelatihan',$no_pelatihan)->value('syarat_berkas');
        $tgl_lahir = $request->tgl_lahir;

        //ID Berkas
    	$berkas->id_berkas = ($id_berkas+1);
        $berkas->id_peserta = $nrp;
    	$berkas->id_pelatihan = $request->no_pelatihan;

        if(preg_match("#([a-zA-Z0-9-_\\/]+\\.zip)#", $_FILES["lampiran_cv"]["name"], $matches, PREG_OFFSET_CAPTURE)){
            #continue
        }
        else {
            $error = 2;
            return view('registration', ['error' => $error]);
        }
        $konten_berkas = $request->file('berkas');
        Storage::disk('lampiran')->put(
            $nrp.'/'.$nrp.'_berkas.zip',
            file_get_contents($konten_berkas->getRealPath())
            );

        $no_pelatihan = 1;
    	$strlen = strlen($status_pelatihan);
        $counter = 0;
    	$status_berkas = "0";
    	for($i=0; $i<=$strlen; $i++){
    		$char = substr($status_pelatihan, $i, 1);    		
    		if($char == ','){
    			$status_berkas .= ",0";
    		}
    	}
    	$berkas->status_berkas = $status_berkas;

        if($tgl_lahir != DB::table('peserta')->where('NRP', $nrp)->value('tgl_lahir'));{
            $error = 1;
            return view('pendaftaran.register', $error);
        }

    	$berkas->save();
    	return ;
    }
}