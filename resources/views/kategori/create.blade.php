@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-md-9">
            <h3>Tambah Kategori</h2>
        </div>
        <div class="col-12 col-md-3 text-end">
            {{-- <a href="{{ route('menu.create') }}">
                <button class="btn btn-primary">Tambah Menu</button>
            </a> --}}
        </div>
    </div>
    <form action="{{ route('category.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('post')
        <div class="my-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" id="nama" class="form-control" name="nama" required>
        </div>

        <button class="btn btn-primary">Tambah Data</button>
    </form>
</div>
@endsection
