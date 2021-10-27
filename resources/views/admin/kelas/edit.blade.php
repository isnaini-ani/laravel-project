@extends('layouts.admin-master')

@section('title')
Edit Kelas
@endsection

@section('content')
<section class="section">
	<section class="section-header">
		<h1>Edit Kelas</h1>
		<div class="section-header-breadcrumb">
			<div class="breadcrumb-item"><a href="{{route('admin.kelas')}}">Kelas</a></div>
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
		<form action="{{route('admin.kelas.update', $kelas->kode)}}" method="POST">
			@method('patch')
			@csrf
			<div class="form-group">
				<label>Kode</label>
				<input type="text" class="form-control" name="kode"  placeholder="K00*" value="{{$kelas->kode}}" readonly>
			</div>
			<div class="form-group">
				<label>Nama</label>
				<input type="text" class="form-control" name="nama"  placeholder="Nama Kelas" value="{{$kelas->nama}}" autofocus>
			</div>
			<div class="form-group">
				<label>Tingkat</label>
				<input type="text" class="form-control" name="tingkat"  placeholder="Tingkat" value="{{$kelas->tingkat}}" autofocus>
			</div>
			<div class="form-group">
				<label>Jurusan</label>
				<input type="text" class="form-control" name="jurusan"  placeholder="Jurusan" value="{{$kelas->jurusan}}" autofocus>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-warning">Edit Data</button>
				<button class="btn btn-secondary" onclick="document.getElementById('form').reset(); document.getElementById('from').value = null; return false;">Reset</button>
			</div>
		</form>
	</section>
</section>
@endsection