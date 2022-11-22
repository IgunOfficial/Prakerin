<div class="modal fade" id="addGenreFilm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <form action="{{ route('genre.store') }}" method="post">
            @csrf
            <div class="modal-content">
                <div class="modal-header" style="background-color: #5C6E58">
                    <h5 class="modal-title" id="exampleModalLabel"><b><i>Tambah Genre Film</i></b></h5>
                    {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button> --}}
                </div>
                <div class="modal-body" style="background-color: #8AA899">
                    <div class="form-group">
                        <label for=""><b><i>Kategori :</i></b></label>
                        <input type="text" name="kategori"
                            class="form-control @error('kategori') is-invalid @enderror" id="" required>
                        @error('kategori')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer" style="background-color: #5C6E58">
                    <a href="{{ route('genre.index') }}" class="btn btn-secondary" style="float: right">
                        <b><i>Close</i></b>
                    </a>
                    <button type="submit" class="btn btn-primary"><b><i>Save</i></b></button>
                </div>
            </div>
        </form>
    </div>
</div>