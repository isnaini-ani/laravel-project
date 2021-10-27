@extends('layouts.admin-master')

@section('title')
Edit Siswa
@endsection

@section('content')
<section class="section">
	<section class="section-header">
		<h1>Edit Siswa</h1>
		<div class="section-header-breadcrumb">
			<div class="breadcrumb-item"><a href="{{route('admin.siswa')}}">Siswa</a></div>
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
		<form method="post" action="{{route('admin.update-siswa', $siswa->nis)}}">
			@method('patch')
			@csrf
			<div class="form-group">
				<label>NIS</label>
				<input type="number" class="form-control" name="nis"  placeholder="Nomor Induk Siswa" value="{{$siswa->nis}}" required="">
			</div>
			<div class="form-group">
				<label>Nama Lengkap</label>
				<input type="text" class="form-control" name="nama_lengkap"  placeholder="Nama Lengkap" value="{{$siswa->nama_lengkap}}" required="">
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
				<textarea class="form-control" name="alamat" placeholder="Alamat saat ini" required="">{{$siswa->alamat}}</textarea>
			</div>
			<div class="form-group">
				<label>No Telepon</label>
				<input type="number" class="form-control" name="no_telp"  placeholder="+62************" value="{{$siswa->no_telp}}" required="">
			</div>
			<button type="submit" class="btn btn-warning">Edit Data</button>
			<button class="btn btn-secondary" onclick="document.getElementById('form').reset(); document.getElementById('from').value = null; return false;">Reset</button>
		</form>
	</section>
</section>
@endsection