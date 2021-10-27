@extends('layouts.admin-master')

@section('title')
Kelas
@endsection

@section('content')
<section class="section">
	<div class="section-header">
		<h1>Kelas</h1>
		<div class="section-header-breadcrumb">
			<a href="{{route('admin.create-kelas')}}" class="btn btn-primary">Tambah Data</a>
		</div>
	</div>
	<div class="section-body">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>Kode</th>
					<th>Nama</th>
					<th>Tingkat</th>
					<th>Jurusan</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				@foreach($kelas as $kl)
				<tr>
					<td>{{$kl->kode}}</td>
					<td>{{$kl->nama}}</td>
					<td>{{$kl->tingkat}}</td>
					<td>{{$kl->jurusan}}</td>
					<td>
						<div class="row">
							<a href="{{route('admin.edit-kelas', $kl->kode)}}" class="btn btn-warning"><i class="fas fa-edit"></i></a>
							<form action="{{ route('admin.kelas.destroy', $kl->kode)}}" method="post">
								@method('delete')
								@csrf
								<button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></a>
								</form>
							</td>
						</div>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</section>
@endsection