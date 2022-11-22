@extends('layouts.admin')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header" style="background-color: #5C6E58">
                        <b><i>Edit Data</i></b>
                        <a href="{{ route('casting.index') }}" class="btn btn-primary" style="float: right">
                            <b><i>Kembali</i></b>
                        </a>
                    </div>
                    <div class="card-body" style="background-color: #8AA899">
                        <form action="{{ route('casting.update', $casting->id) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for=""><b><i>Nama :</i></b></label>
                                <input type="text" name="nama"
                                    class="form-control @error('nama') is-invalid @enderror" value="{{ $casting->nama }}">
                                @error('nama')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for=""><b><i>Foto :</i></b></label>
                                @if (isset($casting) && $casting->foto)
                                    <p>
                                        <img src="{{ asset('images/casting/' . $casting->foto) }}"
                                            class="img-rounded img-responsive" style="width: 75px; height:75px;"
                                            alt="">
                                    </p>
                                @endif
                                <input type="file" name="foto"
                                    class="form-control @error('foto') is-invalid @enderror" value="{{ $casting->foto }}">
                                @error('foto')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for=""><b><i>Jenis Kelamin :</i></b></label>
                                <br>
                                <input type="radio" name="jenis_kelamin" value="Laki-laki"
                                    class="@error('jenis_kelamin') is-invalid @enderror"
                                    {{ $casting->jenis_kelamin == 'Laki-laki' ? 'checked' : '' }}>Laki-laki&nbsp;&nbsp;
                                <input type="radio" name="jenis_kelamin" value="Perempuan"
                                    class="@error('jenis_kelamin') is-invalid @enderror"
                                    {{ $casting->jenis_kelamin == 'Perempuan' ? 'checked' : '' }}>Perempuan
                                @error('jenis_kelamin')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for=""><b><i>Tanggal Lahir :</i></b></label>
                                <input type="date" name="tanggal_lahir" value="{{ $casting->tanggal_lahir }}"
                                    class="form-control @error('tanggal_lahir') is-invalid @enderror">
                                @error('tanggal_lahir')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-block btn-outline-primary">
                                    <b><i>Simpan</i></b>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection