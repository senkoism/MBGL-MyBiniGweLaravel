@extends('main')
@section('title', 'Ini Halaman Detail')
@section('navbar')
@parent
    <b>Bagian Navbar</b>
    
@endsection

@section('content')
        <h2>Ini adalah Halaman Detail
            Nama Produk  : {{$produk}}
            Id : <b> {{$id}}</b><br/>

            <hr/>
            @for ($i = 0; $i < $count; $i++)
                data {{ $i }} <br/>
            @endfor
@endsection