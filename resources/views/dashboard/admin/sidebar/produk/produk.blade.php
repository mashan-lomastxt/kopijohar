@extends('template')
@section('content')
    <div class="mt-3 pl-3 pr-3">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body shadow mb-4">
                        <a href="{{ route('produk.tambah') }}" class="btn btn-primary btn-sm float-right">Tambah Produk</a>
                        <h2 class="font-weight-bold mb-4">List Produk</h2>
                        <table class="table table-stripped  table-bordered text-center" id="myTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nama Produk</th>
                                    <th>Kategori</th>
                                    <th>Harga</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($produks as $index=>$produk)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $produk->name }}</td>
                                    <td>{{ $produk->kategori }}</td>
                                    <td>{{ $produk->harga }}</td>
                                    <td>
                                        <form action="{{ route('produk.edit', [$produk->id]) }}" method="GET">
                                            @csrf
                                            <button class="btn btn-success btn-sm btn-block">Edit</button>
                                        </form>
                                        <br>
                                        <form action="{{ route('produk.delete', [$produk->id]) }}" method="GET">
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
        </div>
    </div>
@endsection