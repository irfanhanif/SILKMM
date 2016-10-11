@extends('pendaftaran.master.temp')

@section('title', 'STATUS KEPESERTAAN')

@section('body')

<h4 class="center-align">PP LKMM IX FTIf</h4>

<div class="row">
	<div class="col s12 m4 l4 offset-l4 offset-m4">
		<div class="input-field">
			<i class="material-icons prefix">search</i>
			<input type="text" name="nrp" id="nrp" class="validate">
			<label class="nrp">Cari NRP</label>
		</div>
	</div>
</div>

<ul class="pagination center">
	<li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
	<li class="active"><a href="#!">1</a></li>
	<li class="waves-effect"><a href="#!">2</a></li>
	<li class="waves-effect"><a href="#!">3</a></li>
	<li class="waves-effect"><a href="#!">4</a></li>
	<li class="waves-effect"><a href="#!">5</a></li>
	<li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
</ul>

<div class="center">
	<a href="#">Back to Home</a>
</div>

<?php $jumlah_berkas = 6 ?>

<div class="row">
	<div style="overflow-x: auto;">
		<table class="bordered">
			<thead>
				<tr>
					<th>NRP</th>
					<th>Nama</th>
					<th>Tes Awal</th>
					<th>Wawancara</th>
					@for($i=0; $i<$jumlah_berkas; $i++)
					<th>Berkas</th>
					@endfor
					<th>Status Akhir</th>
				</tr>
			</thead>
			<tbody>
				<!-- MASUKKAN FOREACH DISINI -->
				@for($i=0; $i<10; $i++)
				<tr>
					<td>5114100177</td>
					<td>Irfan Hanif</td>
					<td class="grey center-align">None</td>
					<td class="light-green accent-3 center-align">Sudah</td>
					@for($j=0; $j<$jumlah_berkas; $j++)
					<td class="red center-align">Ditolak</td>
					@endfor
					<td class="red center-align"><strong>Ditolak</strong></td>					
				</tr>
				@endfor
			</tbody>
		</table>
	</div>
</div>

<br>

<ul class="pagination center">
	<li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
	<li class="active"><a href="#!">1</a></li>
	<li class="waves-effect"><a href="#!">2</a></li>
	<li class="waves-effect"><a href="#!">3</a></li>
	<li class="waves-effect"><a href="#!">4</a></li>
	<li class="waves-effect"><a href="#!">5</a></li>
	<li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
</ul>

<div class="center">
	<a href="#">Back to Home</a>
</div>

@endsection
