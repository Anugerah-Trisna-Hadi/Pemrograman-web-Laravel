@extends('master.master')
@section('title','Data Siswa - Anugerah Web')
@section('content')
<section>
	<div class="container">
		<div class="col-md mt-5">
			<h1 class="text-center">Tambah Data Siswa</h1>
		</div>
		<form action="/data_kirim" method="post">
			@csrf
  <div class="form-group">
    <label for="nama_siswa">Masukan Nama Siswa</label>
    <input type="text" class="form-control" id="nama_siswa" name="nama_siswa" required="required">
	</div>
  <div class="form-group">
    <label for="kelas">Kelas</label>
    <input type="text" class="form-control" id="kelas" name="kelas" required="required">
  </div>
  <div class="form-group">
    <label for="umur_siswa">Umur</label>
    <input type="number" class="form-control" id="umur_siswa" name="umur_siswa" required="required">
  </div>
  <div class="form-group">
    <label for="alamat">Alamat</label>
    <input type="text" class="form-control" id="alamat" name="alamat" required="required">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
	</div>
</section>
@endsection

