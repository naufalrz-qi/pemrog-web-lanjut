@extends('layout.app')
@section('content')
<style>
    th {
    padding: 5px;
}
td{
    padding: 5px;
}
</style>
<table>
    <thead>
        <tr>
        <th>id</th>
        <th>fakultas</th>
        <th>prodi</th>
        <th>kelas</th>
        <th>isi</th>
    </tr>
    </thead>
    <body>

    @foreach ($data as $d)
        <tr>
        <td>{{++$id}}</td>
        <td>{{$d->fakultas}}</td>
        <td>{{$d->prodi}}</td>
        <td>{{$d->kelas}}</td>
        <td>{{$d->isi}}</td>

        <td>
            <a href="{{route('kelas.edit',$d->id)}}" class="btn btn-warning">Edit</a>
        </td>
        <td>
            <form action="{{route('kelas.delete',$d->id)}}" class="btn btn-danger">Delete
            {{ csrf_field() }}
            {{method_field('DELETE')}}
        </form>
        </td>
    </tr>
    @endforeach

    </body><
</table>
@endsection
