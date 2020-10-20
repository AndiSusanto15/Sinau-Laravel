@extends('layout')
@section('content')

    <div class="container mt-5 col-lg-6">
    <form action="{{ route('quote.store') }}" method="post">
        @csrf
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Tambah Quote</label>
                <textarea name="quote" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Tambah Quote Baru</button>
            <a href="{{ route('quote.index') }}" role="button" class="btn btn-secondary">Kembali</a>

        </form>

    </div>
@endsection
