<div class="modal fade" id="showGenreFilm-{{ $genre->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #5C6E58">
                <h5 class="modal-title" id="exampleModalLabel"><b><i>Show Genre Film</i></b></h5>
                {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button> --}}
            </div>
            <div class="modal-body" style="background-color: #8AA899">
                <div class="form-group">
                    <label for=""><b><i>Kategori :</i></b></label>
                    <input type="text" class="form-control" name="kategori" value="{{ $genre->kategori }}"
                        id="" required>
                </div>
            </div>
            <div class="modal-footer" style="background-color: #5C6E58">
                <a href="{{ route('genre.index') }}" class="btn btn-secondary" style="float: right">
                    <b><i>Close</i></b>
                </a>
            </div>
        </div>
    </div>
</div>