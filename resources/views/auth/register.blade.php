@extends('layouts.auth-master')

@section('content')
<div class="card card-primary">
  <div class="card-header"><h4>Register</h4></div>

  <div class="card-body">
    <form method="POST" action="{{ route('register') }}">
      @csrf
      <div class="form-group">
        <label for="nis">NIS</label>
        <input id="nis" type="text" class="form-control{{ $errors->has('nis') ? ' is-invalid' : '' }}" name="nis" tabindex="1" placeholder="Nomor Induk Siswa" value="{{ old('nis') }}" autofocus>
        <div class="invalid-feedback">
          {{ $errors->first('nis') }}
        </div>
      </div>
      <div class="form-group">
        <label for="nama_lengkap">Nama Lengkap</label>
        <input id="nama_lengkap" type="text" class="form-control{{ $errors->has('nama_lengkap') ? ' is-invalid' : '' }}" name="nama_lengkap" tabindex="1" placeholder="Nama Lengkap" value="{{ old('nama_lengkap') }}" autofocus>
        <div class="invalid-feedback">
          {{ $errors->first('nama_lengkap') }}
        </div>
      </div>

      <div class="form-group">
        <label for="name">Username</label>
        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" tabindex="1" placeholder="user_name" value="{{ old('name') }}" autofocus>
        <div class="invalid-feedback">
          {{ $errors->first('name') }}
        </div>
      </div>
      
      <div class="form-group">
        <label for="jk">Jenis Kelamin</label>
        <select class="form-control{{ $errors->has('jk') ? ' is-invalid' : '' }}" name="jk" required="" autofocus>
          <option value="P">Perempuan</option>
          <option value="L">Laki - laki</option>
        </select>        
        <div class="invalid-feedback">
          {{ $errors->first('jk') }}
        </div>
      </div>

      <div class="form-group">
        <label for="alamat">Alamat</label>
        <textarea id="alamat" type="text" class="form-control{{ $errors->has('alamat') ? ' is-invalid' : '' }}" name="alamat" tabindex="1" placeholder="Alamat Lengkap" value="{{ old('alamat') }}" autofocus></textarea>
        <div class="invalid-feedback">
          {{ $errors->first('alamat') }}
        </div>
      </div>

      <div class="form-group">
        <label for="no_telp">No Telepon</label>
        <input id="no_telp" type="text" class="form-control{{ $errors->has('no_telp') ? ' is-invalid' : '' }}" name="no_telp" tabindex="1" placeholder="08********" value="{{ old('no_telp') }}" autofocus>
        <div class="invalid-feedback">
          {{ $errors->first('no_telp') }}
        </div>
      </div>

      <div class="form-group">
        <label for="email">Email</label>
        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="email@example.com" name="email" tabindex="1" value="{{ old('email') }}" autofocus>
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
        <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
          Register
        </button>
      </div>
    </form>
  </div>
</div>
<div class="mt-5 text-muted text-center">
 Already have an account? <a href="{{ route('login') }}">Sign In</a>
</div>
@endsection
