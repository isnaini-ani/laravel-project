@extends('layouts.admin-master')

@section('title')
Tambah Kelas
@endsection

@section('content')
<section class="section">
	<section class="section-header">
		<h1>Tambah Kelas</h1>
		<div class="section-header-breadcrumb">
			<div class="breadcrumb-item"><a href="{{route('admin.kelas')}}">Kelas</a></div>
			<div class="breadcrumb-item">Tambah Data</a></div>
		</div>
	</section>
	<section class="section-body">
		<form method="POST" action="{{route('admin.kelas.store')}}">
			@method('post')
			@csrf
			<div class="form-group">
				<label>Kode</label>
				<input type="text" class="form-control" name="kode"  placeholder="K00*" autofocus>
			</div>
			<div class="form-group">
				<label>Nama</label>
				<input type="text" class="form-control" name="nama"  placeholder="Nama Kelas" autofocus>
			</div>
			<div class="form-group">
				<label>Tingkat</label>
				<input type="text" class="form-control" name="tingkat"  placeholder="Tingkat" autofocus>
			</div>
			<div class="form-group">
				<label>Jurusan</label>
				<input type="text" class="form-control" name="jurusan"  placeholder="Jurusan" autofocus>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-success">Tambah Data</button>
				<button class="btn btn-secondary" onclick="document.getElementById('form').reset(); document.getElementById('from').value = null; return false;">Reset</button>
			</div>
		</form>
	</section>
</section>
@endsection