@extends('layout.app')
@section('content')
<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">

                <!-- Notifikasi menggunakan flash session data -->
                @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif

                @if (session('error'))
                <div class="alert alert-error">
                    {{ session('error') }}
                </div>
                @endif

                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <a href="{{ route('mid.create') }}" class="btn btn-md btn-success mb-3 float-right">New
                            mid</a>

                        <table class="table table-bordered mt-1">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">ID</th>
                                    <th scope="col">Judul</th>
                                    <th scope="col">Isi</th>
                                    <th scope="col">Penulis</th>
                                    <th scope="col">Keterangan</th>
                                    <th scope="col">tahun_terbit</th>
                                    <th scope="col">Create At</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($mid as $mid)
                                <tr>
                                    <td>{{ ++$no }}</td>
                                    <td>{{ $mid->id }}</td>
                                    <td>{{ $mid->judul }}</td>
                                    <td>{{ $mid->isi }}</td>
                                    <td>{{ $mid->penulis }}</td>
                                    <td>{{ $mid->keterangan }}</td>
                                    <td>{{ $mid->tahun_terbit }}</td>
                                    <td>{{ $mid->created_at->format('d-m-Y') }}</td>
                                    <td class="text-center">
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                            action="{{ route('mid.destroy', $mid->id) }}" method="POST">
                                            <a href="{{ route('mid.edit', $mid->id) }}"
                                                class="btn btn-sm btn-primary">EDIT</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td class="text-center text-mute" colspan="4">Data mid tidak tersedia</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
@endsection
