@extends('master.master')
@section('title','Data Siswa - Anugerah Web')
@section('content')
<section>
	<div class="container">
		<div class="col-md mt-5">
			<h1 class="text-center">Data Siswa</h1>
		</div>
		<a href="/data_tambah"><button type="button" class="btn btn-primary">Tambah Data Siswa</button></a>
		<table class="table table-hover mt-3">
			<thead class="thead-dark">
		<tr>
			<th>Nama</th>
			<th>Kelas</th>
			<th>Umur</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
		</thead>
		<tbody>
		@foreach($siswa as $s)
		<tr>
			<td>{{ $s->nama_siswa }}</td>
			<td>{{ $s->kelas }}</td>
			<td>{{ $s->umur_siswa }}</td>
			<td>{{ $s->alamat }}</td>
			<td>
				<!-- <a href="/data_edit/{{ $s->id_siswa }}">Edit</a>
				| -->
				<a href="/data_hapus/{{ $s->id_siswa }}">Hapus</a>
			</td>
		</tr>
		@endforeach
		</tbody>
	</table>
	</div>
</section>
@endsection