@extends('layouts.app')

@section('content')
<div class="container">
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
        <div class="mb-3">
            <label for="foto" class="form-label">Foto</label>
            <input type="file" id="foto" class="form-control" name="foto" required>
        </div>
        <div class="mb-3">
            <label for="harga" class="form-label">Harga</label>
            <input type="number" id="harga" class="form-control" name="harga" required>
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Kategori</label>
            <select name="category_id" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                <option selected>Pilih kategori</option>
                <option value="1">1</option>
              </select>
        </div>
        <div class="mb-3">
            <label for="keterangan" class="form-label">Keterangan</label>
            <input type="text" id="keterangan" class="form-control" name="keterangan" required>
        </div>

        <button class="btn btn-primary">Tambah Data</button>
    </form>
</div>
@endsection
