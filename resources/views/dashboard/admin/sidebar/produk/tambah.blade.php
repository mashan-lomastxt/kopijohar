@extends('template')
@section('content')
<div class="col-md-12 shadow mt-3">
    <div class="card shadow mb-4">
      <div class="card-body">
        @if(Session::has('Success'))
          <div class="alert alert-success">{{ Session::get('Success') }}</div>
          @endif
          @if(Session::has('Error'))
          <div class="alert alert-danger">{{ Session::get('Error') }}</div>
          @endif
          <h2 class="font-weight-bold mb-4">Tambah Produk</h2>
          <form action="{{ route('produk.create') }}" method="POST">
            @csrf
            <div class="form-group">
              <label class="mt-0">Nama Produk</label>
              <div class="input-group input-group-merge input-group-alternative mb-3">
                <input class="form-control" placeholder="Nama" type="text" name="name" id="name" value="{{ old('name') }}">
              </div>
              <span class="text-danger">@error('name'){{ $message }}@enderror</span>
            </div>

            <div class="form-group">
                <label class="mt-0">Kategori</label>
                <select class="form-control" name="kategori" id="kategori">
                  <option>pilih kategori</option>
                </select>
            </div>
  
            <div class="form-group">
              <label class="mt-0">Harga Produk</label>
              <div class="input-group input-group-merge input-group-alternative mb-3">
                <input class="form-control" placeholder="20000" type="number" name="harga" id="name" value="{{ old('harga') }}">
              </div>
              <span class="text-danger">@error('harga'){{ $message }}@enderror</span>
            </div>
            
            <div class="text-center">
              <button type="submit" class="btn btn-success mt-4 btn-lg btn-block">Tambah Produk</button>
            </div>
          </form>
      </div>
    </div>
</div>

@endsection