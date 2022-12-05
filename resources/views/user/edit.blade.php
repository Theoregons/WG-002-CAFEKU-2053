@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-md-9">
            <h3>Edit Data</h2>
        </div>
        <div class="col-12 col-md-3 text-end">
            {{-- <a href="{{ route('menu.create') }}">
                <button class="btn btn-primary">Tambah Menu</button>
            </a> --}}
        </div>
    </div>
    <form action="/user/{{ $user->id }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="my-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" id="nama" class="form-control" value="{{ $user->name }}" name="name" required>
        </div>

        <div class="mb-3">
            <label for="harga" class="form-label">Email</label>
            <input type="text" id="harga" class="form-control" value="{{ $user->email }}" name="email" required>
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Role</label>
            <select name="role" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                <option selected>Pilih Role</option>
                <option value="admin">Admin</option>
                <option value="member">Member</option>
              </select>
        </div>


        <button class="btn btn-primary">Edit Data</button>
    </form>
</div>
@endsection
