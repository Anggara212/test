@extends('layouts.app')

@section('content')
    
    <div class="container">
        <div class="row justify-content-center">
            <a href="{{route('agenda')}}" type="button" class="btn btn-success mt-2">Ke Dashboard</a>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h1>Ini adalah halaman admin</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection