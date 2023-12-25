@extends('layouts.master')

@section('content')

    <div class="container">
    <h1>Data Mahasiswa SNBP Kelas 1 B Pend.Matematika Untirta </h1>
            @csrf
            <form action="/alpro/store" method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">NIM</label>
                <input type="text" name="nim" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <select class="form-select"name="jenis_kelamin">
                <option value="">Pilih Jenis Kelamin</option> 
                <option value="L">Laki-Laki</option> 
                <option value="P">Perempuan</option> 
            </select> <br>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Asal Sekolah</label>
                <input type="text" name="asal_sekolah" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <input type="submit" name="submit" class="btn btn-info" value="Save">
        </form>
    </div>
@endsection
