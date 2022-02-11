@extends('template')
@section('content')

<div class="card shadow mb-4">
    <div class="container pb-4">
        <form action="{{ route('member.update', [$users->id]) }}" method="POST">
            @csrf
            <div class="form-group mt-4">
                <label for="example-search-input" class="form-control-label">Nama</label>
                <input class="form-control" type="text" placeholder="Nama" name="name" id="txtNama">
            </div>
            <div class="form-group">
                <label for="example-email-input" class="form-control-label">Email</label>
                <input class="form-control" type="email" placeholder="email@email.com" name="email" id="email">
            </div>
            <div class="form-group">
                <label for="example-email-input" class="form-control-label">Password</label>
                <input class="form-control" type="password" name="password" id="password">
            </div>
            <button type="submit" class="btn btn-success btn-lg btn-block">Edit</button>
        </form>
    </div>
</div>

@endsection