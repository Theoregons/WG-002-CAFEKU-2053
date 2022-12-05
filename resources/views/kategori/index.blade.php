@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-md-9">
            <h3>Kategori</h2>
        </div>
        <div class="col-12 col-md-3 text-end">
            <a href="{{ route('category.create') }}">
                <button class="btn btn-primary">Tambah Kategori</button>
            </a>
        </div>
    </div>
    <table class="table mt-5">
        <thead>
          <tr>
            {{-- <th scope="col">Id</th> --}}
            <th scope="col">Nama</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($category as $cat )
            <tr>
                {{-- <td>{{ $cat->id }}</td> --}}
                <td>{{ $cat->nama }}</td>
                <td class="d-flex">
                    {{-- <button class="btn btn-success">Detail</button> --}}
                    <a href="{{ url('category/'.$cat->id.'/edit') }}">
                        <button class="btn btn-warning mx-2">Update</button>
                    </a>
                    <form action="/category/{{ $cat->id }}" method="post">
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
