@extends('layout.main')

@section('content')
<div class="container">
    <h1 class="text-center mb-4 pt-4">Tambah Agenda</h1>
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card">
                <div class="card-body" style="width: 90%">
                    <form  method="POST" action="{{route('insertdata')}}">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama Guru</label>
                            <input type="text" name="namaguru" class="form-control" id=""
                                aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text"></div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Materi Pembelajaran</label>
                            <input type="text" name="materipembelajaran" class="form-control" id=""
                                aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text"></div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Mata Pelajaran</label>
                            <select class="form-select" aria-label="Default select example" name="matapelajaran">
                                <option selected>Pilih Pelajaran</option>
                                <option value="1">Mtk</option>
                                <option value="2">IPA</option>
                                <option value="3">IPS</option>
                              </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Jam Pelajaran</label>
                            <input type="text" name="jampelajaran" class="form-control" id=""
                                aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text"></div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Absensi</label>
                            <select class="form-select" aria-label="Default select example" name="absensi">
                                <option selected>Pilih Absensi</option>
                                <option value="1">Hadir</option>
                                <option value="2">Tidak hadir</option>
                              </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">kelas</label>
                            <select class="form-select" aria-label="Default select example" name="kelas">
                                <option selected>Pilih Kelas</option>
                                <option value="1">X</option>
                                <option value="2">XI</option>
                                <option value="3">IX</option>
                              </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Jenis Pembelajaran</label>
                            <input type="text" name="jenispembelajaran" class="form-control" id=""
                                aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text"></div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Link Pembelajaran</label>
                            <input type="text" name="linkpembelajaran" class="form-control" id=""
                                aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text"></div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Dokumentasi</label>
                            <input type="file" name="dokumentasi" class="form-control" id=""
                                aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text"></div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Keterangan</label>
                            <input type="text" name="keterangan" class="form-control" id=""
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
