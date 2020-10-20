@extends('layout')
@section('content')
 
 
    <div class="container mt-5 col-lg-6">
 
        @if (session('message'))
            <div class="alert alert-{{session('status')}} alert-dismissible fade show" role="alert">
                {{ session('message') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
 
        <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action active">
                Daftar Quotes Terbaru
            </a>
            @foreach ($data as $item)
                <a href="#" class="list-group-item list-group-item-action">
                    <div class="row d-flex align-items-center">
                        <div class="col-lg-9">
                            {{ $item->quote }}
                        </div>
                        <div class="col-lg-3 justify-content-center">
                            <form action="{{ route('quote.destroy', $item->id) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-sm btn-outline-danger float-right m-1">Delete</button>
                            </form>
                            <form action="{{ route('quote.edit', $item->id) }}" method="GET">
                                <button type="submit" class="btn btn-sm btn-outline-success float-right m-1">Edit</button>
                            </form>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
 
        <div class="mt-4">
            <a href="{{ route('quote.create') }}" class="btn btn-primary">Tambah Quote</a>
        </div>
    </div>
 
@endsection
