@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-md-9 mb-5">
            <h3>Beranda</h2>
        </div>
        <div class="col-12 col-md-3 text-end">
            {{-- <a href="{{ route('menu.create') }}">
                <button class="btn btn-primary">Tambah Menu</button>
            </a>
        </div> --}}
    </div>
    @foreach ($menus as $menu )
    <div class="row">
        <div class="col-5 mx-2">
            <img class="mb-3" src="{{ asset('storage/'.$menu->foto) }}" style="width:100%" alt="">
            <h2><b>{{ $menu->nama }}</b></h2>
            <h3>Rp. {{ $menu->harga }}</h3>
            <p>{{ $menu->keterangan }}</p>
        </div>
    </div>
    @endforeach


    <footer>
        <div class="fixed-bottom text-center bg-primary text-white pt-3">
            <p>&copy; <b> Copyright Alright reserved Cafeku </b> - JL Ronggolawe No.28 Kec.Blimbing Malang</b></p>
        </div>
    </footer>


</div>
@endsection
