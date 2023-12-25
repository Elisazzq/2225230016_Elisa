@extends('layouts.master')

@section('content')
    <div class="container">
    <h1>Edit Data</h1>

    <form action="/alpro/{{$alpro->id}}" method="POST">
        @method ('put')
        @csrf
        <form action="/alpro/store" method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$alpro->nama}}">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">NIM</label>
                <input type="text" name="nim" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  value="{{$alpro->nim}}">
            </div>
            <select class="form-select"name="jenis_kelamin">
                <option value="">Pilih Jenis Kelamin</option> 
                <option value="L" @if($alpro->jenis_kelamin == "L") selected @endif>Laki-Laki</option> 
                <option value="P" @if($alpro->jenis_kelamin == "P") selected @endif>Perempuan</option> 
            </select> <br>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Asal Sekolah</label>
                <input type="text" name="asal_sekolah"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$alpro->asal_sekolah}}">
            </div>
            <input type="submit" name="submit" class="btn btn-info" value="Update"><br>
        </form>
    </div>
    
@endsection