@extends('layouts.admin')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header" style="background-color: #5C6E58"><b><i>Cast Film</i></b>
                        <a href="{{ route('casting.create') }}" class="btn btn-primary" style="float:right">
                            <b><i>Tambah Casting</i></b>
                        </a>
                    </div>

                    <div class="card-body" style="background-color: #8AA899">
                        <div class="table-responsive">
                            <table class="table" id="dataTable">
                                <thead>
                                    <th><b><i>No</i></b></th>
                                    <th><b><i>Nama</i></b></th>
                                    <th><b><i>Jenis Kelamin</i></b></th>
                                    <th><b><i>Tanggal Lahir</i></b></th>
                                    <th><b><i>Foto</i></b></th>
                                    <th><b><i>Aksi</i></b></th>
                                </thead>
                                <tbody>
                                    @php $no =1; @endphp
                                    @foreach ($castings as $casting)
                                        <tr>
                                            <td><i>{{ $no++ }}</i></td>
                                            <td><i>{{ $casting->nama }}</i></td>
                                            <td><i>{{ $casting->jenis_kelamin }}</i></td>
                                            <td><i>{{ $casting->tanggal_lahir }}</i></td>
                                            <td><img src="{{ $casting->image() }}" style="height:50px; width: 45px"
                                                    alt=""></td>
                                            <td>
                                                <form action="{{ route('casting.destroy', $casting->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <a href="{{ route('casting.edit', $casting->id) }}"
                                                        class="btn btn-sm btn-outline-warning">
                                                        <b><i>Edit</i></b>
                                                    </a>
                                                    <a href="{{ route('casting.show', $casting->id) }}"
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