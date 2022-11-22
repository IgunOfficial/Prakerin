@extends('layouts.admin')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header" style="background-color: #5C6E58">
                       <b><i>Show Data</i></b>
                        <a href="{{ route('movie.index') }}" class="btn btn-primary" style="float: right">
                            <b><i>Kembali</i></b>
                        </a>
                    </div>
                    <div class="card-body" style="background-color: #8AA899">
                        <div class="form-group">
                            <label for=""><b><i>Judul Movie :</i></b></label>
                            <input type="text" name="tahun" value="{{ $movie->judul }}" class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <label for=""><b><i>Durasi Film :</i></b></label>
                            <div class="input-group mb-3">
                                <input type="number" min="0" name="durasi" class="form-control @error('durasi') is-invalid @enderror" value="{{ $movie->durasi }}" aria-describedby="casting" readonly>
                                <span class="input-group-text" id="casting">Menit</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for=""><b><i>Genre :</i></b></label>
                            <input type="text" name="tahun" value="{{ $movie->genreFilm->kategori }}"
                                class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <label for=""><b><i>Tahun Rilis :</i></b></label>
                            <input type="text" name="tahun" value="{{ $movie->tahunRilis->tahun }}"
                                class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <label for=""><b><i>Cover :</i></b></label>
                            <p>
                                <img src="{{ asset('images/movies/' . $movie->cover) }}" class="img-rounded img-responsive"
                                    style="width: 175px; height:175px;" alt="">
                            </p>
                        </div>
                        <div class="form-group">
                            <label for=""><b><i>Background :</i></b></label>
                            <p>
                                <img src="{{ asset('images/movies/' . $movie->background) }}"
                                    class="img-rounded img-responsive" style="width: 175px; height:175px;" alt="">
                            </p>
                        </div>
                        <div class="form-group">
                            <label for=""><b><i>Cast Film :</i></b></label>
                            <ol>
                                @foreach ($movie->casting as $item)
                                    <li> <i>{{ $item->nama }}</i></li>
                                @endforeach
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection