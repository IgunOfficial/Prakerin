@extends('layouts.admin')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header" style="background-color: #5C6E58"><b><i>Tahun Rilis</i></b>
                        <a href="{{ route('tahun_rilis.create') }}" class="btn btn-primary" style="float:right">
                            <b><i>Tambah Data</i></b>
                        </a>
                    </div>

                    <div class="card-body" style="background-color: #8AA899">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable">
                                <thead>
                                    <th><b><i>No</i></b></th>
                                    <th><b><i>Tahun Rilis</i></b></th>
                                    <th><b><i>Jumlah Film</i></b></th>
                                    <th><b><i>Aksi</i></b></th>
                                </thead>
                                <tbody>
                                    @php $no =1; @endphp
                                    @foreach ($tahun as $data)
                                        <tr>
                                            <td><i>{{ $no++ }}</i></td>
                                            <td><i>{{ $data->tahun }}</i></td>
                                            <td><i>{{ $data->movie->count() }}</i></td>
                                            <td>
                                                <form action="{{ route('tahun_rilis.destroy', $data->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <a href="{{ route('tahun_rilis.edit', $data->id) }}"
                                                        class="btn btn-sm btn-outline-warning">
                                                        <b><i>Edit</i></b>
                                                    </a>
                                                    <a href="{{ route('tahun_rilis.show', $data->id) }}"
                                                        class="btn btn-sm btn-outline-info">
                                                        <b><i>Show</i></b>
                                                    </a>
                                                    <button type="submit" class="btn btn-sm btn-outline-danger"
                                                        onclick="return confirm('apakah anda yakin?')"> <b><i>Delete</i></b>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection