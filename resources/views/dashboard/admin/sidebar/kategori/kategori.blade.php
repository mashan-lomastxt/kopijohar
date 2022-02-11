@extends('template')
@section('content')
<div class="mt-3 pl-3 pr-3">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body shadow mb-4">
                    <h2 class="font-weight-bold mb-4">List Kategori</h2>
                    <table class="table table-stripped  table-bordered text-center" id="myTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Kategori</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kategories as $index=>$kategori)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $kategori->name }}</td>
                                <td>
                                    <form action="{{ route('kategori.edit', [$kategori->id]) }}" method="GET">
                                        @csrf
                                        <button class="btn btn-success btn-sm btn-block">Edit</button>
                                    </form>
                                    <br>
                                    <form action="{{ route('kategori.delete', [$kategori->id]) }}" method="GET">
                                        @csrf
                                        <button class="btn btn-danger btn-sm btn-block">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h2 class="font-weight-bold mb-4">Kategori</h2>
                    <form action="{{ route('kategori.create') }}" method="POST">
                        @csrf
                        <div>
                            <label class="mt-2">Tambah Kategori</label>
                            <input type="text" class="form-control mt-2" name="name" id="name" placeholder="makanan">
                            @error('name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary mt-4 btn-sm btn-block">Tambah Kategori</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection