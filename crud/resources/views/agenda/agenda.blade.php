@extends('layout.main')


@section('content')
<div class="container">
    <div class="card">
    <div class="card-body">
    <h1 class="mx-auto">Agenda</h1>
    <div class="row">
        <a href="{{route('tambahagenda')}}" type="button" class="btn btn-success mt-2">Tambah +</a>
        <div style="overflow-x: scroll;;">
        <table class="table mt-3">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama guru</th>
                    <th scope="col">Materi pembelajaran</th>
                    <th scope="col">matapelajaran</th>
                    <th scope="col">jampelajaran</th>
                    <th scope="col">absensi</th>
                    <th scope="col">kelas</th>
                    <th scope="col">jenispembelajaran</th>
                    <th scope="col">linkpembelajaran</th>
                    <th scope="col">dokumentasi</th>
                    <th scope="col">keterangan</th>
                    <th scope="col">action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    @foreach ($data as $row)
                    <th scope="row">{{ $row->id }}</th>
                    <td>{{$row -> namaguru}}</td>
                    <td>{{$row -> materipembelajaran}}</td>
                    <td>{{$row -> matapelajaran}}</td>
                    <td>{{$row -> jampelajaran}}</td>
                    <td>{{$row -> absensi}}</td>
                    <td>{{$row -> kelas}}</td>
                    <td>{{$row -> jenispembelajaran}}</td>
                    <td>{{$row -> linkpembelajaran}}</td>
                    <td>
                        <img src="{{asset('fotodokumentasi/'.$row->dokumentasi)}}" alt="" style="width: 100px">
                    </td>
                    <td>{{$row -> keterangan}}</td>
                    <td class="d-flex">
                        <form action="/deletedata/{{$row->id}}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-warning">Delete</button>
                        </form>
                       <a href="/tampilan/{{$row->id}}" type="submit" class="btn btn-danger">Edit</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </div>
</div>
</div>
</div>
@endsection
