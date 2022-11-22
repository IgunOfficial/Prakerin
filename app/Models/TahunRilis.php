<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Alert;

class TahunRilis extends Model
{
    use HasFactory;
    public $fillable = ['tahun'];
    public $timestamps = true;

    public function movie()
    {
        // model Tahun Rilis bisa memiliki banyak data
        // dari model Movie melalui fk id_tahun_rilis
        return $this->hasMany(Movie::class, 'id_tahun_rilis');
    }

    public static function boot() {
        parent::boot();

        self::deleting(function($tahun_rilis){
            if($tahun_rilis->movie->count() > 0) {
                Alert::error('Gagal Menghapus!', 'Tidak Menghapus Tahun Rilis '. $tahun_rilis->tahun);
                return false;
            }
            Alert::success('Done', 'Data berhasil dihapus')->autoClose(2000);
        });
    }
}
