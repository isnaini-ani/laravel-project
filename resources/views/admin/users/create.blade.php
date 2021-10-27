@extends('layouts.admin-master')

@section('title')
Tambah User
@endsection

@section('content')
<section class="section">
	<section class="section-header">
		<h1>Tambah User</h1>
		<div class="section-header-breadcrumb">
			<div class="breadcrumb-item"><a href="{{route('admin.users')}}">Users</a></div>
			<div class="breadcrumb-item">Tambah Data</a></div>
		</div>
	</section>
	<section class="section-body">
		<form method="post" action="{{route('admin.users.store')}}">
			@method('post')
			@csrf
			<div class="form-group">
				<label for="name">Name</label>
				<input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" tabindex="1" placeholder="Full name" value="{{ old('name') }}" autofocus>
				<div class="invalid-feedback">
					{{ $errors->first('name') }}
				</div>
			</div>

			<div class="form-group">
				<label for="email">Email</label>
				<input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Email address" name="email" tabindex="1" value="{{ old('email') }}" autofocus>
				<div class="invalid-feedback">
					{{ $errors->first('email') }}
				</div>
			</div>

			<div class="form-group">
				<label for="password" class="control-label">Password</label>
				<input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid': '' }}" placeholder="Set account password" name="password" tabindex="2">
				<div class="invalid-feedback">
					{{ $errors->first('password') }}
				</div>
			</div>

			<div class="form-group">
				<label for="password_confirmation" class="control-label">Confirm Password</label>
				<input id="password_confirmation" type="password" placeholder="Confirm account password" class="form-control{{ $errors->has('password_confirmation') ? ' is-invalid': '' }}" name="password_confirmation" tabindex="2">
				<div class="invalid-feedback">
					{{ $errors->first('password_confirmation') }}
				</div>
			</div>

			<div class="form-group">
				<label>Role</label>
				<select class="form-control" name="role_id">
					<option value="1">Admin</option>
					<option value="2">Siswa</option>
				</select>
			</div>
			<button type="submit" class="btn btn-success">Tambah Data</button>
			<button class="btn btn-secondary" onclick="document.getElementById('form').reset(); document.getElementById('from').value = null; return false;">Reset</button>
		<!-- </form> -->
	</section>
</section>	
@endsection