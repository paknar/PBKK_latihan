<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MataKuliah extends Model
{
    protected $table = 'matakuliah';

    protected $fillable = [
        'nama',
        ];
    
    public function mengajar() {
        return $this->hasOne('App\Mengajar', 'matakuliah_id');
    }
    public function mengambil() {
        return $this->hasMany('App\Mengambil', 'matakuliah_id');
    }
}
