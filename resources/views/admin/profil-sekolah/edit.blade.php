@extends('layouts.admin-master')

@section('title')
Edit Profil Sekolah
@endsection

@section('content')
<section class="section">
	<section class="section-header">
		<h1>Edit Profil Sekolah</h1>
		<div class="section-header-breadcrumb">
			<div class="breadcrumb-item"><a href="{{route('admin.profil')}}">Profil Sekolah</a></div>
			<div class="breadcrumb-item">Edit Data</a></div>
		</div>
	</section>
	<section class="section-body">
		@if ($errors->any())        
		<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div><br>
		@endif
		<form action="{{route('admin.profil.update', $profil->id)}}" method="POST">
			@method('patch')
			@csrf
			<div class="form-group">
				<label>Judul</label>
				<input type="text" class="form-control" name="judul" id="judul"  placeholder="Judul" required="" autofocus="" value="{{$profil->judul}}">
			</div>
			<div class="form-group">
				<label>Isi</label>
				<textarea class="form-control" name="isi" id="isi" placeholder="Isi" required="" autofocus="">{{$profil->isi}}</textarea>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-warning">Edit Data</button>
				<button class="btn btn-secondary" onclick="document.getElementById('form').reset(); document.getElementById('from').value = null; return false;">Reset</button>
			</div>
		</form>
	</section>
</section>
@endsection