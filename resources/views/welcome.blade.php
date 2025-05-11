
@extends('layout.sidemenu')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@section('title','Penjualan')</title>
    @vite('resources/css/app.css')
</head>
<body>
    @section('content')
    <div class="container p-12 bg-" >
            @component('layout.alert')
                @slot('class')
                    bg-yellow-400
                @endslot
                @slot('judul')
                     Hari ini hari 
                @endslot
                @slot('isi')
                        Eak
                @endslot
            @endcomponent
                    @component('layout.alert',['class' => 'bg-blue-200','judul' => 'Ini judul','isi' => 'terlalu lama '])
                    @endcomponent

    </div>
     @endsection
   
</body>
</html>