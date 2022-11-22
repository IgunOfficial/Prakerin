@extends('layouts.admin')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header" style="background-color: #5C6E58">
                        <b><i>Tambah Data</i></b>
                        <a href="{{ route('casting.index') }}" class="btn btn-primary" style="float: right">
                            <b><i>Kembali</i></b>
                        </a>
                    </div>
                    <div class="card-body" style="background-color: #8AA899">
                        <form action="{{ route('casting.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for=""><b><i>Nama :</i></b></label>
                                <input type="text" name="nama"
                                    class="form-control @error('nama') is-invalid @enderror" id="">
                                @error('nama')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for=""><b><i>Foto :</i></b></label>
                                <input type="file" name="foto"
                                    class="form-control @error('foto') is-invalid @enderror" id="">
                                @error('foto')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for=""><b><i>Jenis Kelamin :</i></b></label>
                                <br>
                                <input type="radio" name="jenis_kelamin" value="Laki-Laki"
                                    class="@error('jenis_kelamin') is-invalid @enderror" id=""><i>Laki-Laki</i>&nbsp;&nbsp;
                                <input type="radio" name="jenis_kelamin" value="Perempuan"
                                    class="@error('jenis_kelamin') is-invalid @enderror" id=""><i>Perempuan</i>
                                @error('jenis_kelamin')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for=""><b><i>Tanggal Lahir :</i></b></label>
                                <input type="date" name="tanggal_lahir"
                                    class="form-control @error('tanggal_lahir') is-invalid @enderror" id="">
                                @error('tanggal_lahir')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-block btn-outline-primary">
                                    <b><i>Tambah</i></b>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection