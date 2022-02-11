@extends('template')
@section('content')
<div class="card shadow mb-4 pl-3 pr-3">
    <div class="card mt-3">
        <div class="card-body">
            <form action="" method="POST">
                @csrf
                <div class="form-group mt-4">
                    <label for="example-search-input" class="form-control-label">Nama Produk</label>
                    <input class="form-control" type="text" placeholder="Nama" name="name" id="txtNama">
                    <span class="text-danger">@error('name')
                        {{ $message }}
                    @enderror</span>
                </div>
                <button type="submit" class="btn btn-success btn-lg btn-block">Edit</button>
            </form>
        </div>
    </div>
</div>
@endsection