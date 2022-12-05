@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-md-9">
            <h3>Users</h2>
        </div>
        <div class="col-12 col-md-3 text-end">
            <a href="{{ route('user.create') }}">
                {{-- <button class="btn btn-primary">Tambah User</button> --}}
            </a>
        </div>
    </div>
    <table class="table mt-5">
        <thead>
          <tr>
            <th scope="col">Nama</th>
            <th scope="col">Email</th>
            <th scope="col">Role</th>

            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($user as $u )
            <tr>
                <td>{{ $u->name }}</td>
                {{-- <td> <img src="{{ asset('storage/'.$u->foto) }}" width="50" alt=""> </td> --}}
                <td>{{ $u->email }}</td>
                <td>{{ $u->role }}</td>
                <td class="d-flex">
                    {{-- <button class="btn btn-success">Detail</button> --}}
                    <a href="{{ url('user/'.$u->id.'/edit') }}">
                        <button class="btn btn-warning mx-2">Update</button>
                    </a>
                    <form action="/user/{{ $u->id }}" method="post">
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
