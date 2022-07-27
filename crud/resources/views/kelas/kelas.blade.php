@extends('layout.main')

@section('content')
<div class="container">
    <div class="card">
    <div class="card-body">
    <h1 class="mx-auto">Data Kelas</h1>
    <div class="row">
        <a href="{{route('tambahkelas')}}" type="button" class="btn btn-success mt-2">Tambah +</a>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama kelas</th>
                    <th scope="col">Wali Kelas</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    @foreach ($data as $row)
                    <th scope="row">{{ $row->id }}</th>
                    <td>{{$row -> namakelas}}</td>
                    <td>{{$row -> walikelas}}</td>
                    <td class="d-flex">
                        <form action="/deletedatakelas/{{$row->id}}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-warning">Delete</button>
                        </form>
                       <a href="/tampilankelas/{{$row->id}}" type="submit" class="btn btn-danger">Edit</a>
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