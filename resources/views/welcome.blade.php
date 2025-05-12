
@extends('layout.sidemenu')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@section('title','Penjualan')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body>
    @section('content')
    <div class="container p-12 bg-" >
           @component('layout.card')
                @slot('img')
                    data:image/jpeg;base64,{{ base64_encode($produk->foto_produk) }}
                @endslot
                @slot('nama')
                    {{$produk->nama_produk}}
                @endslot
                @slot('harga')
                    {{$produk->harga_produk}}
                @endslot
           @endcomponent
    </div>
     @endsection

</body>
</html>
