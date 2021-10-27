@extends('layouts.admin-master')

@section('title')
Tambah Siswa
@endsection

@section('content')
<section class="section">
	<section class="section-header">
		<h1>Tambah Siswa</h1>
		<div class="section-header-breadcrumb">
			<div class="breadcrumb-item"><a href="{{route('admin.siswa')}}">Siswa</a></div>
			<div class="breadcrumb-item">Tambah Data</a></div>
		</div>
	</section>
	<section class="section-body">
		<form action="{{ route('admin.siswa.store') }}" method="post">
			@method('post')
			@csrf
			<div class="form-group">
				<label>NIS</label>
				<input type="number" class="form-control" name="nis"  placeholder="Nomor Induk Siswa" required="">
			</div>
			<div class="form-group">
				<label>Nama Lengkap</label>
				<input type="text" class="form-control" name="nama_lengkap"  placeholder="Nama Lengkap" required="">
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="email" class="form-control" name="email"  placeholder="email@example.com" required="">
			</div>
			<div class="form-group">
				<label>Jenis Kelamin</label>
				<select class="form-control" name="jk" required="">
					<option value="P">Perempuan</option>
					<option value="L">Laki - laki</option>
				</select>
			</div>
			<div class="form-group">
				<label>Alamat</label>
				<textarea class="form-control" name="alamat" placeholder="Alamat saat ini" required=""></textarea>
			</div>
			<div class="form-group">
				<label>No Telepon</label>
				<input type="number" class="form-control" name="no_telp"  placeholder="+62************" required="">
			</div>
			<div class="form-group">
				<label class="custom-switch mt-2">
					<input type="checkbox"class="custom-switch-input">
					<span class="custom-switch-indicator"></span>
					<span class="custom-switch-description">Saya sudah membuat akun Users dengan role Siswa dan email yang sama</span>
				</label>
			</div>
			<button type="submit" class="btn btn-success">Tambah Data</button>
			<button class="btn btn-secondary" onclick="document.getElementById('form').reset(); document.getElementById('from').value = null; return false;">Reset</button>
		</form>
	</section>
</section>
@endsection