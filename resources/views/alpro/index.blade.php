 @extends('layouts.master')

 @section('content')
    <div class="container">
        <a class="btn btn-primary" href="/alpro/create">Add Alpro</a>
        <table class="table table-hover">
            <tr>
                <th>NAMA</th>
                <th>NIM</th>
                <th>JENIS KELAMIN</th>
                <th>ASAL SEKOLAH</th>
                <th>AKSI</th>
            </tr>
            @foreach($alpro as $a)
                <tr>
                    <td>{{$a->nama}}</td>
                    <td>{{$a->nim}}</td>
                    <td>{{$a->jenis_kelamin}}</td>
                    <td>{{$a->asal_sekolah}}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a class="btn btn-warning" href="/alpro/{{$a->id}}/edit">Edit</a>
                            <form action="/alpro/{{$a->id}}" method="POST">
                                @csrf
                                @method('delete')
                                <input class="btn btn-danger" type="submit" value="Delete">
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
