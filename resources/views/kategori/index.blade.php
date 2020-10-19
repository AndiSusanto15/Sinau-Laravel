<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Kategori</title>
</head>
<body>
    <h1>Daftar Kategori</h1>
    <h2>{{ $kalimat }}</h2>

    {{-- Nama kategori : {{$daftar_kategori[1]->name}} --}}
    @foreach ($daftar_kategori as $item)
        <ul>
            <li>{{$item->name}}</li>
        </ul>
    @endforeach

    @if ($showSidebar == "left")
        {{-- Tampilkan sidebar kiri --}}
        <div> SIDEBAR KIRI</div>
    @elseif ($showSidebar == "right")
        {{-- Tampilkan sidebar kanan --}}
        <div> SIDEBAR KANAN </div>
    @else
        <div>TIDAK ADA SIDEBAR DITAMPILKAN</div>
    @endif


    <hr>

    @switch($vote_status)
        @case(1)
            <div> Tidak Setuju</div>
            @break
        @case(2)
            <div> Setuju</div>
            @break
        @default
            <div>anda belum melakukan voting</div>
    @endswitch

    @isset($productList)
        {{-- kodoe ini menampilkan view jika variable $productList sudah di definisikan --}}
    @endisset

    @empty($productList)
        {{-- kalo yg ini dijalankan jika variable bernilai kosong --}}
    @endempty
    
    @auth
        {{-- ini untuk mengecek apakah pengguna sudah login --}}
        <h1>Selamt datang</h1>
    @endauth

    @guest
        Hai, kamu belum login, yuk login yuk, bisa kok bisaaaa.
    @endguest

    @forelse ($daftar_kategori as $item)
        <ul>
            <li>{{ $item->name }}</li>
        </ul>
    @empty
        <h2>Upss data yang anda cari belum ada.</h2>
    @endforelse

    Daftar angka : 
    @for ($i = 0; $i < 10; $i++)
        {{  $i }}
    @endfor
</body>
</html>