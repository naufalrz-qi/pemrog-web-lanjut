@extends('layout.app')
@section('content')
<body>

    <div class="container mt-5 mb-5">
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
                        <form action="{{ route('mid.update', $mid->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="judul">Judul</label>
                                <input type="text" class="form-control @error('judul') is-invalid @enderror"
                                    name="judul" value="{{ old('judul', $mid->judul) }}" required>

                                <!-- error message untuk judul -->
                                @error('judul')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="isi">isi</label>
                                <textarea
                                    name="isi" id="isi"
                                    class="form-control @error('isi') is-invalid @enderror" name="isi" id="isi"
                                    rows="5" required>{{ old('isi', $mid->isi) }}</textarea>

                                <!-- error message untuk content -->
                                @error('isi')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="penulis">penulis</label>
                                <input type="text" class="form-control @error('penulis') is-invalid @enderror"
                                    name="penulis" value="{{ old('penulis', $mid->penulis) }}" required>

                                <!-- error message untuk penulis -->
                                @error('penulis')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="keterangan">keterangan</label>
                                <textarea
                                    name="keterangan" id="keterangan"
                                    class="form-control @error('keterangan') is-invalid @enderror" name="keterangan" id="keterangan"
                                    rows="5" required>{{ old('keterangan', $mid->keterangan) }}</textarea>

                                <!-- error message untuk content -->
                                @error('keterangan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>


                                <div class="form-group">
                                    <label for="tahun_terbit">tahun_terbit</label>
                                    <input type="text" class="form-control @error('tahun_terbit') is-invalid @enderror"
                                        name="tahun_terbit" value="{{ old('tahun_terbit', $mid->tahun_terbit) }}" required>

                                    <!-- error message untuk tahun_terbit -->
                                    @error('tahun_terbit')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>



                            <button type="submit" class="btn btn-md btn-primary">Update</button>
                            <a href="{{ route('mid.index') }}" class="btn btn-md btn-secondary">back</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- include summernote js -->
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#content').summernote({
                height: 250, //set editable area's height
            });
        })
    </script>
</body>
@endsection
