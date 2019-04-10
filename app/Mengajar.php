<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mengajar extends Model
{
    protected $table = 'mengajar';
    protected $fillable = [
        'nipdosen', 'matakuliah_id'
        ];

    public function matkul() {
        return $this->belongsTo('App\MataKuliah', 'matakuliah_id');
    }

    public function dosen() {
        return $this->belongsTo('App\dosen', 'nipdosen', 'nip');
    }
}
