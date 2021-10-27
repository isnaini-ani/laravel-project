@extends('layouts.admin-master')

@section('title')
Users
@endsection

@section('content')
<section class="section">
	<div class="section-header">
		<h1>Users</h1>
		<div class="section-header-breadcrumb">
			<a href="{{route('admin.create-user')}}" class="btn btn-primary">Tambah Data</a>
		</div>
	</div>
	<div class="section-body">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>ID</th>
					<th>Nama</th>
					<th>Email</th>
					<th>Avatar</th>
					<th>Role</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				@foreach($users as $us)
				<tr>
					<td>{{$us->id}}</td>
					<td>{{$us->name}}</td>
					<td>{{$us->email}}</td>
					<td>{{$us->avatar}}</td>
					<td>{{$us->role->name}}</td>
					<td>
						<div class="row">
							<a href="{{route('admin.edit-user', $us->id)}}" class="btn btn-warning"><i class="fas fa-edit"></i></a>
							<form action="{{ route('admin.users.destroy', $us->id)}}" method="post">
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