@extends('layouts.admin-master')

@section('title')
Profil Sekolah
@endsection

@section('content')
<section class="section">
	<div class="section-header">
		<h1>Profil Sekolah</h1>
		<div class="section-header-breadcrumb">
			<a href="{{route('admin.create-profil')}}" class="btn btn-primary">Tambah Data</a>
		</div>
	</div>
	<div class="section-body">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>Judul</th>
					<th>Isi</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				@foreach($profil as $pf)
				<tr>
					<td>{{$pf->judul}}</td>
					<td>{{$pf->isi}}</td>
					<td>
						<div class="row">
							<a href="{{ route('admin.edit-profil', $pf->id)}}" class="btn btn-warning"><i class="fas fa-edit"></i></a>
							<form action="{{ route('admin.profil.destroy', $pf->id)}}" method="post">
								@method('delete')
								@csrf
								<button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></a>
								</form>
							</td>
						</div>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</section>
	@endsection