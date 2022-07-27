@extends('layout.main')

@section('content')
<div class="container">
    <h1 class="text-center mb-4 pt-4">Edit Guru</h1>
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card">
                <div class="card-body" style="width: 90%">
                    <form  method="POST" action="/updatedataguru/{{$data->id}}">
                        @csrf
                        @method('put')
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama Guru</label>
                            <input type="text" name="namaguru" class="form-control" id=""
                                aria-describedby="emailHelp"  value="{{$data->namaguru}}">
                            <div id="emailHelp" class="form-text"></div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nik Guru</label>
                            <input type="text" name="nikguru" class="form-control" id=""
                                aria-describedby="emailHelp"  value="{{$data->nikguru}}">
                            <div id="emailHelp" class="form-text"></div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Nama Pelajaran</label>
                            <select class="form-select" aria-label="Default select example" name="namapelajaran" value="{{$data->namapelajaran}}">
                                <option selected>Pilih Kelas</option>
                                <option value="1">IPA</option>
                                <option value="2">IPS</option>
                                <option value="3">MTK</option>
                              </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Username</label>
                            <input type="text" name="username" class="form-control" id=""
                                aria-describedby="emailHelp" value="{{$data->username}}">
                            <div id="emailHelp" class="form-text"></div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Password</label>
                            <input type="text" name="password" class="form-control" id=""
                                aria-describedby="emailHelp" value="{{$data->password}}">
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