<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\berkas;
use Storage;
use Validator;

class userController extends Controller
{
    public function show(Request $request){
    	$berkas = new Berkas;
       	$id_berkas = DB::table('berkas')->max('id_berkas');
        $nrp = $request->nrp;
        $no_pelatihan = 1;
        $status_pelatihan = DB::table('pelatihan')->where('id_pelatihan',$no_pelatihan)->value('syarat_berkas');
        $tgl_lahir = $request->ultah;
        $nama = $request->nama;

        //ID Berkas
    	$berkas->id_berkas = ($id_berkas+1);
        $berkas->id_peserta = $nrp;
    	$berkas->id_pelatihan = 1;


        if(preg_match("#([a-zA-Z0-9-_\\/]+\\.zip)#", $_FILES['berkas']['name'], $matches, PREG_OFFSET_CAPTURE)){
        }
        else {
            $error = 2;
            return view('pendaftaran.register', ['error' => $error]);
        }

        $tgl = DB::table('peserta')->where('nrp', $nrp)->value('tgl_lahir');
        $new_date = date('Y-m-d', strtotime($tgl_lahir));
        if($new_date == $tgl){
            $konten_berkas = $request->file('berkas');
            Storage::disk('local')->put(
                $nrp.'/'.$nrp.'_berkas.zip',
                file_get_contents($konten_berkas->getRealPath())
                );
        }
        
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

    	$berkas->save();
    	return view('pendaftaran.register');
    }
}