@extends('template')
@section('content')
<div class="container shadow mt-4">
  <div class="card shadow mb-4">
    <div class="card-body">
        @if(Session::has('Success'))
        <div class="alert alert-success">{{ Session::get('Success') }}</div>
        @endif
        @if(Session::has('Error'))
        <div class="alert alert-danger">{{ Session::get('Error') }}</div>
        @endif
      <form action="{{ route('member.create') }}" method="POST">
        @csrf
        <div class="form-group">
          <div class="input-group input-group-merge input-group-alternative mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="ni ni-circle-08"></i></span>
            </div>
            <input class="form-control" placeholder="Nama" type="text" name="name" id="name" value="{{ old('name') }}">
          </div>
          <span class="text-danger">@error('name')
            {{ $message }}
        @enderror</span>
        </div>
        <div class="form-group">
          <div class="input-group input-group-merge input-group-alternative mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="ni ni-email-83"></i></span>
            </div>
            <input class="form-control" placeholder="Email" type="email" name="email" id="email" value="{{ old('email') }}">
          </div>
          <span class="text-danger">@error('email')
            {{ $message }}
        @enderror</span>
        </div>
        <div class="form-group">
          <div class="input-group input-group-merge input-group-alternative">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
            </div>
            <input class="form-control" placeholder="Password" type="password" name="password" id="password" value="{{ old('password') }}">
          </div>
          <span class="text-danger">@error('password')
            {{ $message }}
        @enderror</span>
        </div>
        <div class="form-group">
            <div class="input-group input-group-merge input-group-alternative">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
              </div>
              <input class="form-control" placeholder="Password Ulang" type="password" name="cpassword" id="cpassword" value="{{ old('cpassword') }}">
            </div>
            <span class="text-danger">@error('cpassword')
                {{ $message }}
            @enderror</span>
          </div>
        <div class="text-center">
          <button type="submit" class="btn btn-primary mt-2 btn-lg btn-block">Tambah</button>
        </div>
      </form>
    </div>
  </div>
</div>


@endsection