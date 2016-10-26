@extends('admin.master.temp')

@section('title', 'HALAMAN ADMIN')

@section('body')
<div class="row">
	<div class="col s12 m12 l6 offset-l3">
		<div class="card-panel">
			<h5 class="center">Login Admin</h5>
			<hr><br>

			<i>Hanya admin yang diizinkan untuk masuk.</i>

			<form action="#" method="POST">
				<div class="input-field">
					<i class="material-icons prefix">perm_identity</i>
					<input type="text" id="pelatihan" name="username" class="validate">
					<label for="pelatihan">Username</label>
				</div>
				<div class="input-field">
					<i class="material-icons prefix">vpn_key</i>
					<input type="password" id="password" name="password" class="validate">
					<label for="pelatihan">Password</label>
				</div>
				<div class="center">
					<button class="btn waves-effect waves-light" type="submit" name="submit">Login
						<i class="material-icons right">send</i>
					</button>
				</div>				
			</form>
			<p class="center">Tidak bisa masuk? Hubungi <a class="modal-trigger" href="#admin">admin.</a></p>
			<div id="admin" class="modal">
			<div class="modal-content">
				<h4>Hubungi Komseldat</h4>
				<p>Kalau tidak bisa hubungi: Irfan Hanif atau Nafiar Rahmansyah</p>
			</div>
			<div class="modal-footer">
				<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Okay</a>
			</div>
		</div>
		</div>
	</div>
</div>

@endsection