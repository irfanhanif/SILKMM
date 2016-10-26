<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', function(){
	return view('pendaftaran.home');
});
Route::post('/berkas', 'userController@show');


Route::get('/home', 'homeController@show');
Route::get('/register', function(){
	return view('pendaftaran.register');
});
Route::get('/status', function(){
	return view('pendaftaran.status');
});
Route::get('/coba-status', function(){
	$berkas = App\Berkas::find(90001);
	echo $berkas->status_berkas;

	$status = $berkas->status_berkas;

});
Route::get('/coba-pelatihan', function(){
	$coba = App\Http\Controllers\pelatihan::first();
	echo $coba->nama_pelatihan;
});
Route::get('/belajarphp', function(){
	$id_pelatihan = DB::table('pelatihan')->where('nama_pelatihan',$request->pelatihan)->value('id_pelatihan');
/*	$str = "1,0,1,0,1";
	$strlen = strlen($str);
	for($i=0; $i<=$strlen; $i++){
		$char = substr($str, $i, 1);
		if($char != ','){
			echo $char . " ";
		}
	}

	$statusBerkas1 = "11";
	$statusBerkas2 = "21";
	$statusBerkas3 = "31";
	echo "<br>";
	$index = $statusBerkas3[0];
	echo $index . "<br>";	
	$index = $index * 2;
	$str[$index] = $statusBerkas3[1];	
	echo $str;
*/
});

//Routing sementara
Route::get('/admin', function(){
	return view('admin.home');
});