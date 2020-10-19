@extends('app')
@section('title', 'Anggota')
@section('content_header')
<h2> {{ $anggota->nama ?? 'Show Anggota' }}</h2>
@stop
@section('content')
<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="float-left">
                        <span class="card-title">
                            <h3>Lihat Anggota</h3>
                        </span>
                    </div>
                    <div class="float-right">
                        <a class="btn btn-primary" href="{{ route('anggota.index') }}"> Kembali</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <strong>Nama:</strong>
                        {{ $anggota->nama }}
                    </div>
                    <div class="form-group">
                        <strong>Alamat:</strong>
                        {{ $anggota->alamat }}
                    </div>
                    <div class="form-group">
                        <strong>Tempat Lahir:</strong>
                        {{ $anggota->tempat_lahir }}
                    </div>
                    <div class="form-group">
                        <strong>Tanggal Lahir:</strong>
                        {{ $anggota->tanggal_lahir }}
                    </div>
                    <div class="form-group">
                        <strong>Jenis Kelamin:</strong>
                        {{ $anggota->jenis_kelamin=="L" ? "Laki-laki" : "Perempuan" }}
                    </div>
                    <div class="form-group">
                        <strong>Status:</strong>
                        {{ $anggota->STATUS=="0" ? "Tidak Aktif" : "Aktif" }}
                    </div>
                    <div class="form-group">
                        <strong>Telepon:</strong>
                        {{ $anggota->telepon }}
                    </div>
                    <div class="form-group">
                        <strong>Keterangan:</strong>
                        {{ $anggota->keterangan }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection