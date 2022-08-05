@extends('layouts.app')
@section('content')
<h2 class="text-dark text-center fw-bold">HALAMAN EDIT SISWA SEKOLAH</h2>
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
          <a class="nav-link text-light fw-bold" href="#">TAMBAH SISWA</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container">
	<h1 class="fw-bold">EDIT SISWA</h1>
	<form action="/siswa/{{$siswa->id}}" method="POST">
		@method('put')
		@csrf
		<input type="text" name="nama" placeholder="Nama" value="{{$siswa->nama}}" class="form-control"><br/>
		<input type="text" name="nisn" placeholder="Nisn" value="{{$siswa->nisn}}"class="form-control"><br/>
		<input type="text" name="no_nik" placeholder="Nik" value="{{$siswa->nik}}"class="form-control"><br/>
		<select name="jenis_kelamin" value="{{$siswa->jenis_kelamin}}" class="form-select">
			<option value="">Jenis Kelamin</option>
			<option value="L" @if($siswa->jenis_kelamin == 'L') selected @endif>Laki-Laki</option>
			<option value="P" @if($siswa->jenis_kelamin == 'P') selected @endif>Perempuan</option>
		</select><br/>
		<textarea name="alamat" value="{{$siswa->alamat}}" class="form-control">Alamat</textarea><br/>
		<input type="submit" name="submit" value="SAVE DATA" class="btn btn-primary fw-bold" onclick="alert('yakin ingin merubah data ?')">
		<a href="/siswa" class="btn btn-danger fw-bold">BATAL</a>
	</form>
</div>	
@endsection