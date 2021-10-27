@extends('layouts.admin-master')

@section('title')
Tambah Profil Sekolah
@endsection

@section('content')
<section class="section">
	<section class="section-header">
		<h1>Tambah Profil Sekolah</h1>
		<div class="section-header-breadcrumb">
			<div class="breadcrumb-item"><a href="{{route('admin.profil')}}">Profil Sekolah</a></div>
			<div class="breadcrumb-item">Tambah Data</a></div>
		</div>
	</section>
	<section class="section-body">
		<form action="{{route('admin.profil.store')}}" method="POST">
			@method('post')
			@csrf
			<div class="form-group">
				<label>Judul</label>
				<input type="text" class="form-control" name="judul" id="judul"  placeholder="Judul" required="" autofocus="">
			</div>
			<div class="form-group">
				<label>Isi</label>
				<textarea class="form-control" name="isi" id="isi" placeholder="Isi" required="" autofocus=""></textarea>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-success">Tambah Data</button>
				<button class="btn btn-secondary" onclick="document.getElementById('form').reset(); document.getElementById('from').value = null; return false;">Reset</button>
			</div>
		</form>
	</section>
</section>
@endsection