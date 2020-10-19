@extends('app')
@section('title', 'Anggota')
@section('content_header')
<h2>Tabel Anggota</h2>
@stop
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <span id="card_title">
                            <h3> {{ __('Anggota') }} </h3>
                        </span>
                        <div class="float-right">
                            @include('anggota.search',['url'=>'anggota','link'=>'anggota'])
                        </div>
                    </div>
                </div>
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
                @endif
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="thead">
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>Tempat Lahir</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Status</th>
                                    <th>Telepon</th>
                                    <th>Keterangan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($anggota as $angg)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{<td>$angg->nama }}</td>
                                    <td>{{$angg->alamat }}</td>
                                    <td>{{$angg->tempat_lahir }}</td>
                                    <td>{{$angg->tanggal_lahir }}</td>
                                    <td>{{$angg->jenis_kelamin }}</td>
                                    <td>{{$angg->STATUS }}</td>
                                    <td>{{$angg->telepon }}</td>
                                    <td>{{$angg->keterangan }}</td>
                                    <form action="{{ route('anggota.destroy', $angg->id) }}" method="POST">
                                        <a class="btn btn-sm btn-primary "href="{{ route('anggota.show',$angg->id) }}"><i class="fa fa-fw fa-eye"></i>Lihat</a>
                                        <a class="btn btn-sm btn-success" href="{{ route('anggota.edit',$angg->id) }}"><i class="fa fa-fw fa-edit"></i>Ubah</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Hapus</button>
                                    </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {!! $anggota->links() !!}
        </div>
    </div>
</div>
@endsection