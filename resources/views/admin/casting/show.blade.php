@extends('layouts.admin')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header" style="background-color: #5C6E58">
                        <b><i>Show Data</i></b>
                        <a href="{{ route('casting.index') }}" class="btn btn-primary" style="float: right">
                            <b><i>Kembali</i></b>
                        </a>
                    </div>
                    <div class="card-body" style="background-color: #8AA899">
                        <div class="form-group">
                            <label for=""><b><i>Nama Pemain :</i></b></label>
                            <input type="text" name="tahun" value="{{ $casting->nama }}" class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <label for=""><b><i>Tanggal Lahir :</i></b></label>
                            <input type="text" name="tahun" value="{{ $casting->tanggal_lahir }}" class="form-control"
                                readonly>
                        </div>
                        <div class="form-group">
                            <label for=""><b><i>Jenis Kelamin :</i></b></label>
                            <input type="text" name="tahun" value="{{ $casting->jenis_kelamin }}" class="form-control"
                                readonly>
                        </div>
                        <div class="form-group">
                            <label for=""><b><i>Foto :</i></b></label>
                            <p>
                                <img src="{{ asset('images/casting/' . $casting->foto) }}"
                                    class="img-rounded img-responsive" style="width: 175px; height:175px;" alt="">
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection