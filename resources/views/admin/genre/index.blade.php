@extends('layouts.admin')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header" style="background-color: #5C6E58"><b><i>Genre Film</i></b>
                        <button type="button" class="btn btn-primary" style="float:right" data-bs-toggle="modal"
                        data-bs-target="#addGenreFilm">
                        <b><i>Tambah Data</i></b>
                        </button>
                        @include('admin.genre.create')
                    </div>
                    <div class="card-body" style="background-color: #8AA899">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable">
                                <thead>
                                    <th><b><i>No</i></b></th>
                                    <th><b><i>Nama Kategori</i></b></th>
                                    <th><b><i>Aksi</i></b></th>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @foreach($genres as $genre)
                                        <tr>
                                            <td><i>{{ $no++ }}</i></td>
                                            <td><i>{{ $genre->kategori }}</i></td>
                                            <td>
                                                <form action="{{ route('genre.destroy', $genre->id)}}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button type="button" class="btn btn-sm btn-outline-warning"
                                                data-bs-toggle="modal"
                                                data-bs-target="#editGenreFilm-{{ $genre->id }}">
                                                <b><i>Edit</i></b>
                                                </button>
                                                <button type="button" class="btn btn-sm btn-outline-info"
                                                data-bs-toggle="modal"
                                                data-bs-target="#showGenreFilm-{{ $genre->id }}">
                                                <b><i>Show</i></b>
                                                </button>
                                                <button type="submit" class="btn btn-sm btn-outline-danger"
                                                onclick="return confirm('Apakah anda yakin ?')"><b><i>Delete</i></b>
                                                </button>
                                            </form>
                                            </td>
                                        </tr>
                                        @include('admin.genre.edit')
                                        @include('admin.genre.show')
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