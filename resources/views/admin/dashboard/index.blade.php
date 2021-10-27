@extends('layouts.admin-master')

@section('title')
Dashboard
@endsection

@section('content')
<section class="section">
	<div class="section-header">
		<h1>Dashboard</h1>
	</div>

	<div class="section-body">
		<div class="row">
			<div class="col-lg-3 col-md-6 col-sm-6 col-12">
				<div class="card card-statistic-1">
					<div class="card-icon bg-primary">
						<i class="fas fa-users"></i>
					</div>
					<div class="card-wrap">
						<div class="card-header">
							<h4>Total User</h4>
						</div>
						<div class="card-body">
							10
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6 col-12">
				<div class="card card-statistic-1">
					<div class="card-icon bg-danger">
						<i class="far fa-user"></i>
					</div>
					<div class="card-wrap">
						<div class="card-header">
							<h4>Admin</h4>
						</div>
						<div class="card-body">
							42
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6 col-12">
				<div class="card card-statistic-1">
					<div class="card-icon bg-warning">
						<i class="fas fa-user-graduate"></i>
					</div>
					<div class="card-wrap">
						<div class="card-header">
							<h4>Siswa</h4>
						</div>
						<div class="card-body">
							1,201
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6 col-12">
				<div class="card card-statistic-1">
					<div class="card-icon bg-success">
						<i class="fas fa-chalkboard-teacher"></i>
					</div>
					<div class="card-wrap">
						<div class="card-header">
							<h4>Kelas</h4>
						</div>
						<div class="card-body">
							47
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection
