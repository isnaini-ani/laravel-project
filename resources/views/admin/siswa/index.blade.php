@extends('layouts.admin-master')

@section('title')
Siswa
@endsection

@section('content')
<section class="section">
	<div class="section-header">
		<h1>Siswa</h1>
		<div class="section-header-breadcrumb">
			<a href="{{route('admin.create-siswa')}}" class="btn btn-primary">Tambah Data</a>
		</div>
	</div>
	<div class="section-body">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>NIS</th>
					<th>Nama Lengkap</th>
					<th>Jenis Kelamin</th>
					<th>Alamat</th>
					<th>Email</th>
					<th>No Telepon</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				@foreach($siswa as $si)
				<tr>
					<td><strong>{{$si->nis}}</strong></td>
					<td>{{$si->nama_lengkap}}</td>
					<td>{{$si->jk}}</td>
					<td>{{$si->alamat}}</td>
					<td>{{$si->user->email}}</td>
					<td>{{$si->no_telp}}</td>
					<td>
						<div class="row">
							<a href="{{ route('admin.edit-siswa', $si->nis)}}" class="btn btn-warning"><i class="fas fa-edit"></i></a>
							<form action="{{ route('admin.siswa.destroy', $si->nis)}}" method="post">
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