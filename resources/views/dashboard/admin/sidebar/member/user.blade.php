@extends('template')
@section('content')
<div class="mt-3 pl-3 pr-3">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body shadow mb-4">
                    <a href="{{ route('member.tambah') }}" class="btn btn-primary btn-sm float-right">Tambah Member</a>
                    <h2 class="font-weight-bold mb-4">List Member</h2>
                    <div class="table-responsive">
                        <table class="table table-stripped table-bordered text-center" id="myTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $index=>$user)
                                    <tr>
                                        <td>{{ $index +1 }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>
                                            <form action="{{ route('member.edit', [$user->id]) }}" method="GET">
                                                @csrf
                                                <button class="btn btn-success btn-sm btn-block">Edit</button>
                                            </form>
                                            <br>
                                            <form action="{{ route('member.delete', [$user->id]) }}" method="GET">
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
</div>

@endsection