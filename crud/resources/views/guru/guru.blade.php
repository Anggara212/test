@extends('layout.main')

@section('content')
<div class="container">
    <div class="card">
    <div class="card-body" style="width: 705px;">
    <h1 class="mx-auto">Data guru</h1>
    <div class="row">
        <a href="{{route('tambahguru')}}" type="button" class="btn btn-success mt-2">Tambah +</a>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Guru</th>
                    <th scope="col">NIK Guru</th>
                    <th scope="col">Nama Pelajaran</th>
                    <th scope="col">Username</th>
                    <th scope="col">Password</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    @foreach ($data as $row)
                    <th scope="row">{{ $row->id }}</th>
                    <td>{{$row -> namaguru}}</td>
                    <td>{{$row -> nikguru}}</td>
                    <td>{{$row -> namapelajaran}}</td>
                    <td>{{$row -> username}}</td>
                    <td>{{$row -> password}}</td>
                    <td class="d-flex">
                        <form action="/deletedataguru/{{$row->id}}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-warning">Delete</button>
                        </form>
                       <a href="/tampilanguru/{{$row->id}}" type="submit" class="btn btn-danger">Edit</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</div>
</div>
@endsection