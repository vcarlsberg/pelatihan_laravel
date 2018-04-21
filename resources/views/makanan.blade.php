    <h2>List Makanan</h2>

    <ul>
    <?php
    foreach($makanan as $nama_makanan)
    {
        echo "<li>".$nama_makanan."</li>";
    }
    ?>
    </ul>

    {{--Menggunakan Blade--}}
    <ul>
    @foreach($makanan as $nama_makanan)
    <li>{{$nama_makanan}}</li>
    @endforeach
    </ul>


@extends('layout')
@section('title','Makanan')

@section('content')
<h2>List Makanan</h2>

<ul>
@foreach($makanan as $nama_makanan)
<li>{{$nama_makanan}}</li>
@endforeach
</ul>
@endsection()