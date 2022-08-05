@extends('layouts.app')
@section('content')
<h2 class="text-dark text-center fw-bold">DASHBOARD TAMBAH SISWA SEKOLAH</h2>
<nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand fw-bold text-light" href="#">YAYASAN MALIK SEJAHTERA</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-light fw-bold" href="/siswa">MANAGEMENT SISWA</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-warning fw-bold" href="/siswa/create">TAMBAH SISWA</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container">
	<h1 class="text-dark fw-bold text-center">CREATE SISWA</h1>
  <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Management Siswa') }}</div>
                <div class="card-body">
	<div class="input-group mb-3 mx-auto d-block">
		<form action="/siswa/store" method="POST">
			@csrf
			<input type="text" name="nama" placeholder="Nama" class="form-control" required><br/>
			<input type="text" name="nisn" placeholder="Nisn" class="form-control" required><br/>
			<input type="text" name="no_nik" placeholder="Nik" class="form-control" required><br/>
			<select name="jenis_kelamin" class="form-select">
				<option value="" selected>Jenis Kelamin</option>
				<option value="L">Laki-Laki</option>
				<option value="P">Perempuan</option>
			</select><br/>
			<div class="input-group flex-nowrap">
				<textarea name="alamat" class="form-control" placeholder="Alamat" required></textarea><br/>
			</div>	
			<input type="submit" name="submit" value="SAVE DATA" class="btn btn-primary fw-bold" onclick="alert('apakah data sudah benar ?')">
			<a href="/siswa" class="btn btn-danger fw-bold">BATAL</a>
		</form>
	</div>
</div>	
@endsection