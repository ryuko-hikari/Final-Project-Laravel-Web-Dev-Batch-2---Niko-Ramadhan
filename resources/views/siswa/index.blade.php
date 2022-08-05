@extends('layouts.app')
@section('content')
<h2 class="text-dark text-center fw-bold">DASHBOARD MANAGEMENT SISWA SEKOLAH</h2>
<nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand fw-bold text-light" href="#">YAYASAN MALIK SEJAHTERA</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-warning fw-bold" href="/siswa">MANAGEMENT SISWA</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light fw-bold" href="/siswa/create">TAMBAH SISWA</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Management Siswa') }}</div>

                <div class="card-body">
                   <a href="/siswa/create" class="btn btn-primary">Add Siswa</a>
	<table class="table">
		<tr>
			<th>Nomor</th>
			<th>Nama</th>
			<th>Nisn</th>
			<th>Nomor Nik</th>
			<th>Jenis Kelamin</th>
			<th>Alamat</th>
			<th>Fitur</th>
		</tr>
		<!-- @foreach($siswa as $s) -->
		<tr>
			<td>{{$s->id}}</td>
			<td>{{$s->nama}}</td>
			<td>{{$s->nisn}}</td>
			<td>{{$s->no_nik}}</td>
			<td>{{$s->jenis_kelamin}}</td>
			<td>{{$s->alamat}}</td>
			<td><a href="/siswa/{{$s->id}}/edit" class="btn btn-primary">Edit</a>
				<form action="/siswa/{{$s->id}}" method="POST">
					@csrf
					@method('delete')
					<input type="submit" value="Delete" class="btn btn-danger">
				</form>
			</td>
		</tr>
		<!-- @endforeach -->
	</table>
	<a href="/" class="btn btn-primary fw-bold">KEMBALI KE HALAMAN AWAL</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection	