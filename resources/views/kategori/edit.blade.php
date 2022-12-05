@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-md-9">
            <h3>Edit Kategori</h2>
        </div>
        <div class="col-12 col-md-3 text-end">
            {{-- <a href="{{ route('menu.create') }}">
                <button class="btn btn-primary">Tambah Menu</button>
            </a> --}}
        </div>
    </div>
    <form action="/category/{{ $data->id }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="my-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" id="nama" class="form-control" value="{{ $data->nama }}" name="nama" required>
        </div>

        <button class="btn btn-primary">Edit Data</button>
    </form>
</div>
@endsection
