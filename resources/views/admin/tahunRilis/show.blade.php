@extends('layouts.admin')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header" style="background-color: #5C6E58">
                        <b><i>Show Data</i></b>
                        <a href="{{ route('tahun_rilis.index') }}" class="btn btn-primary" style="float: right">
                            <b><i>Kembali</i></b>
                        </a>
                    </div>
                    <div class="card-body" style="background-color: #8AA899">
                        <div class="form-group">
                            <label for=""><b><i>Tahun Rilis :</i></b></label>
                            <input type="text" name="tahun" value="{{ $tahun->tahun }}" class="form-control" readonly>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection