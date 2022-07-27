@extends('layout.main')

@section('content')
<div class="container">
    <h1 class="text-center mb-4 pt-4">Tambah Kelas</h1>
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card">
                <div class="card-body" style="width: 90%">
                    <form  method="POST" action="{{route('insertdatakelas')}}">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Nama Kelas</label>
                            <select class="form-select" aria-label="Default select example" name="namakelas">
                                <option selected>Pilih Kelas</option>
                                <option value="1">X</option>
                                <option value="2">XI</option>
                                <option value="3">IX</option>
                              </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Wali Kelas</label>
                            <input type="text" name="walikelas" class="form-control" id=""
                                aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text"></div>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection