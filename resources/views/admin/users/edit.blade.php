@extends('layouts.admin-master')

@section('title')
Edit User
@endsection

@section('content')
<section class="section">
	<section class="section-header">
		<h1>Edit User</h1>
		<div class="section-header-breadcrumb">
			<div class="breadcrumb-item"><a href="{{route('admin.users')}}">Users</a></div>
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
		<form method="post" action="{{route('admin.users.update', $user->id)}}">
			@method('patch')
			@csrf
			<div class="form-group">
				<label for="name">Name</label>
				<input id="name" type="text" class="form-control" name="name" tabindex="1" placeholder="Full name" value="{{ $user->name }}" autofocus>
			</div>

			<div class="form-group">
				<label for="email">Email</label>
				<input id="email" type="email" class="form-control" placeholder="Email address" name="email" tabindex="1" value="{{ $user->email }}" autofocus>
			</div>

			<div class="form-group">
				<label for="password" class="control-label">Password</label>
				<input id="password" type="password" class="form-control" placeholder="Set account password" name="password" value="{{ $user->password }}" tabindex="2" disabled>
				<a href="" class="btn-sm btn-warning"><i class="fa fa-key" aria-hidden="true"></i>
				</a>
			</div>

			<div class="form-group">
				<label>Role</label>
				<select class="form-control" name="role_id">
					<option value="1">Admin</option>
					<option value="2">Siswa</option>
				</select>
			</div>
			<button type="submit" class="btn btn-warning">Edit Data</button>
			<button class="btn btn-secondary" onclick="document.getElementById('form').reset(); document.getElementById('from').value = null; return false;">Reset</button>
			<!-- </form> -->
		</section>
	</section>	
	@endsection