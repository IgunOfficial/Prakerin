<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Alert;

class GenreFilm extends Model
{
    use HasFactory;
    public $fillable = ['kategori'];
    public $timestamps = true;

    public function movie()
    {
        // model GenreFilm memiliki banyak data
        // dari model Movie melalui fk id_genre
        return $this->hasMany(Movie::class, 'id_genre');
    }

    public static function boot()
    {
        parent::boot();

        self::deleting(function($genre){
            //mengecek apakah genre masih punya movie
            if ($genre->movie->count() > 0){
                Alert::error('Gagal Menghapus', 'Tidak Bisa Menghapus ' .$genre->kategori);
                return false;
            }
            Alert::success('Done','Data Berhasil Di Hapus');
        });
    }
}
