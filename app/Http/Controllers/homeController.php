<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;

class homeController extends Controller
{
    //
    public function show(){
    	$data_pelatihan = DB::table('pelatihan')->get();

//    	echo $data_pelatihan;
    	return $data_pelatihan;
    }
}
