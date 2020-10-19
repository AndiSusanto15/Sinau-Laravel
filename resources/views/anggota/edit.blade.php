@extends('app')
@section('title', 'Anggota')
@section('content_header')
<h2>Anggota</h2>
@stop
@section('content')
<section class="content container-fluid">
    <div class="">
        <div class="col-md-12">
            @includeif('partials.errors')
            <div class="card card-default">
                <div class="card-header">
                    <span class="card-title">
                        <h3> Mengubah Data Anggota </h3>
                    </span>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('anggota.update', $anggota->id) }}" role="form" enctype="multipart/form-data">
                        {{ method_field('PATCH') }}
                        @csrf
                        @include('anggota.form')
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection