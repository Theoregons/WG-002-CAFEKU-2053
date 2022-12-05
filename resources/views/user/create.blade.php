@extends('layouts.app')

@section('content')
<!-- <div class="container">
    <div class="row">
        <div class="col-12 col-md-9">
            <h3>Tambah Data</h2>
        </div>
        <div class="col-12 col-md-3 text-end">
            {{-- <a href="{{ route('menu.create') }}">
                <button class="btn btn-primary">Tambah Menu</button>
            </a> --}}
        </div>
    </div>
    <form action="{{ route('menu.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('post')
        <div class="my-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" id="nama" class="form-control" name="nama" required>
        </div>
        <div class="my-3">
            <label for="nama" class="form-label">Email</label>
            <input type="text" id="nama" class="form-control" name="nama" required>
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Role</label>
            <select name="category_id" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                <option selected>Pilih Role</option>
                <option value="admin">Admin</option>
                <option value="member">Member</option>
              </select>
        </div>

        <button class="btn btn-primary">Tambah Data</button>
    </form>
</div> -->
@endsection
