<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mengambil extends Model
{
    protected $table = 'mengambil';
    protected $fillable = [
        'nrp_mhs', 'matakuliah_id', 'nilai'
        ];

        public function matkul() {
            return $this->belongsTo('App\MataKuliah', 'matakuliah_id');
        }

        public function mhs() {
            return $this->belongsTo('App\mhs', 'nrp_mhs', 'nrp');
        }
}
