@extends('layout') 
@section('content')

    <div class="container mt-5 col-lg-6">
        <form action="{{ route('quote.update', $data->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Tambah Quote</label>
                <textarea name="quote" class="form-control" id="exampleFormControlTextarea1" rows="3">{{ $data->quote }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Edit Quote Tsay</button>
            <a href="{{ route('quote.index') }}" role="button" class="btn btn-success">Kembali</a>

        </form>

    </div>
@endsection
