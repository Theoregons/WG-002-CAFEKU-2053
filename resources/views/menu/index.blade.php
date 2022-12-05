@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-md-9">
            <h3>Menu</h2>
        </div>
        <div class="col-12 col-md-3 text-end">
            <a href="{{ route('menu.create') }}">
                <button class="btn btn-primary">Tambah Menu</button>
            </a>
        </div>
    </div>
    <table class="table mt-5">
        <thead>
          <tr>
            <th scope="col">Nama</th>
            <th scope="col">Foto</th>
            <th scope="col">Harga</th>
            <th scope="col">Keterangan</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($menus as $menu )
            <tr>
                <td>{{ $menu->nama }}</td>
                <td> <img src="{{ asset('storage/'.$menu->foto) }}" width="50" alt=""> </td>
                <td>{{ $menu->harga }}</td>
                <td>{{ $menu->keterangan }}</td>
                <td class="d-flex">
                    {{-- <button class="btn btn-success">Detail</button> --}}
                    <a href="{{ url('menu/'.$menu->id.'/edit') }}">
                        <button class="btn btn-warning mx-2">Update</button>
                    </a>
                    <form action="/menu/{{ $menu->id }}" method="post">
                        @csrf
                        @method('delete')
                            <button class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
      </table>
</div>
@endsection
