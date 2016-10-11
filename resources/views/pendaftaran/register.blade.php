@extends('pendaftaran.master.temp')

@section('title', 'HALAMAN PENDAFTARAN')
@section('body')
<div class="row">
	<div class="col s12 m12 l6 offset-l3">
		<div class="card-panel">
			<h5 class="center">Form Pendaftaran</h5>
			<hr><br>

			<i>Isi data di bawah ini dengan benar. Pastikan berkas di upload dengan format (.zip)</i><br>
			<form action="#" method="post">
				<div class="input-field">
					<i class="material-icons prefix">perm_identity</i>
					<input type="text" id="pelatihan" name="pelatihan" class="validate" value="PP LKMM IX FTIf" disabled>
					<label for="pelatihan">Pelatihan</label>
				</div>

				<div class="input-field">
					<i class="material-icons prefix">assignment_id</i>
					<input type="text" id="nrp" name="nrp" required="" aria-required="true">
					<label for="nrp">NRP</label>
				</div>

				<div class="input-field">
					<i class="material-icons prefix">contacts</i>
					<input type="text" id="nama" name="nama" class="validate" required="" aria-required="true">
					<label for="nama">Nama Lengkap</label>
				</div>

				<div class="input-field">
					<i class="material-icons prefix">view_day</i>
					<input id="ultah" type="date" name="ultah" class="datepicker" required="" aria-required="true">
					<label for="ultah">Tanggal Lahir</label>
				</div>

				<div class="file-field input-field">
					<div class="btn">
						<span>File</span>
						<input type="file" name="berkas" class="validate" required="" aria-required="true">
					</div>
					<div class="file-path-wrapper">
						<input class="file-path validate" type="text" placeholder="upload berkas (.zip)" required="" aria-required="true">
					</div>
				</div>

				<div class="center">
					<button class="btn waves-effect waves-light" type="submit" name="submit">Submit
						<i class="material-icons right">send</i>
					</button>
				</div>
			</form>

			<br>

			<div class="center">
				Kembali ke <a href="#">Home</a>
			</div>

		</div>
	</div>
</div>
@endsection