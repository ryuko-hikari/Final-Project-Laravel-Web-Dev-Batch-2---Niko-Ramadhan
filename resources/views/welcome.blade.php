@extends('layout.master')
@section('content')
<h2 class="text-dark text-center fw-bold">SELAMAT DATANG DI ADMIN DASHBOARD SEKOLAH</h2>
<nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand fw-bold text-light" href="#">YAYASAN MALIK SEJAHTERA</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active text-warning fw-bold" aria-current="page" href="#">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light fw-bold" href="#Profil">PROFIL SEKOLAH</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light fw-bold" href="/login">LOGIN</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container bg-light mt-5" id="Profil">
    <h2 class="fw-bold text-center">SAMBUTAN KEPALA SEKOLAH</h2>
    <p class="fw-bold">Bismillahirohmannirrohim Assalamualaikum Warahmatullah Wabarakatuh
    lhamdulillahi Robbil Alamin Kami Panjatkan Kehadlirat Allah SWT, Bahwasannya Dengan Rahmat Dan Karunia-Nya Lah Akhirnya Website Sekolah Ini Dengan Alamat www.malik.sch.id Dapat Kami Perbaharui.
    Kami Mengucapkan Selamat Datang Di Website Kami SMP - SMK - SMA MALIK Jakarta Yang Saya Tujukan Untuk Seluruh Unsur Pimpinan, Guru, Karyawan Dan Siswa Serta Khalayak Umum Guna Dapat Mengakses Seluruh Informasi Tentang Segala Profil, Aktifitas/Kegiatan Serta Fasilitas Sekolah Kami.
    Kami Selaku Pimpinan Sekolah Mengucapkan Terima Kasih Kepada Tim Pembuat Website Ini Yang Telah Berusaha Untuk Dapat Lebih Memperkenalkan Segala Perihal Yang Dimiliki Oleh Sekolah.
    Dan Tentunya Website Sekolah Kami Masih Terdapat Banyak Kekurangan, Oleh Karena Itu Kepada Seluruh Civitas Akademika Dan Masyarakat Umum Dapat Memberikan Saran Dan Kritik Yang Membangun Demi Kemajuan Website Ini Lebih Lanjut.
    Saya Berharap Website Ini Dapat Dijadikan Wahana Interaksi Yang Positif Baik Antar Civitas Akademika Maupun Masyarakat Pada Umumnya Sehingga Dapat Menjalin Silaturahmi Yang Erat Disegala Unsur. Mari Kita Bekerja Dan Berkarya Dengan Mengharap Ridho Sang Kuasa Dan Keikhlasan Yang Tulus Dijiwa Demi Anak Bangsa.
    Terima Kasih Semoga Allah ‘Azza Wa Jalla Menyertai Doa Kita Semua Amin.</p>
</div>
<div class="container">
    <h2 class="fw-bold">GALERI KEGIATAN</h2>
    <div class="row row-cols-3 cols-md-3">
        <div class="col">
            <div class="card card-thumb">
                <img src="https://i.pinimg.com/564x/c3/bb/0d/c3bb0d44e4847c47ceac376663e2adc3.jpg" class="card-img-top" alt="Foto" title="Foto">
                <div class="card-body">
                    <h3 class="card-title">PEMBELAJARAN</h3>
                    <p class="card-text">Ini adalah salah pembelajaran kita disekolah</p>
                    <p class="card-text">UPDATE : 29/07/2022</p>
                </div>
            </div>
        </div>  
        <div class="col">
            <div class="card card-thumb">
                <img src="https://i.pinimg.com/564x/c3/bb/0d/c3bb0d44e4847c47ceac376663e2adc3.jpg" class="card-img-top" alt="Foto" title="Foto">
                <div class="card-body">
                    <h3 class="card-title">PEMBELAJARAN</h3>
                    <p class="card-text">Ini adalah salah pembelajaran kita disekolah</p>
                    <p class="card-text">UPDATE : 29/07/2022</p>
                </div>
            </div>
        </div>  
        <div class="col">
            <div class="card card-thumb">
                <img src="https://i.pinimg.com/564x/c3/bb/0d/c3bb0d44e4847c47ceac376663e2adc3.jpg" class="card-img-top" alt="Foto" title="Foto">
                <div class="card-body">
                    <h3 class="card-title">PEMBELAJARAN</h3>
                    <p class="card-text">Ini adalah salah pembelajaran kita disekolah</p>
                    <p class="card-text">UPDATE : 29/07/2022</p>
                </div>
            </div>
        </div>    
    </div>
</div>
<!-- <div class="footer container-fluid bg-dark text-light text-center fw-bold">COPYRIGHT 2022 YAYASAN MALIK SEJAHTERA dan RYUKO NETWORK LABS</div> -->
@endsection