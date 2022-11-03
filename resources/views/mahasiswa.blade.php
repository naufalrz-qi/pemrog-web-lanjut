@extends('layout.app')
@section('content')
<table>
    <thead>
        <th>no</th>
        <th>Nama Mahasiswa</th>
        <th>Jurusan</th>
        <th>Prodi</th>
    </thead>
    <body>

    @foreach ($data as $d)
        <td>{{++$no}}</td>
        <td>{{$d->nama}}</td>
        <td>{{$d->jurusan}}</td>
        <td>{{$d->prodi}}</td>
        <td>
            <a href="{{route('mahasiswa.edit',$d->id)}}" class="btn btn-warning">Edit</a>
        </td>
        <td>
            <form action="{{route('mahasiswa.delete',$d->id)}}" class="btn btn-danger">Delete
            {{ csrf_field() }}
            {{method_field('DELETE')}}
        </form>
        </td>
    @endforeach
    </body>
</table>
@endsection
