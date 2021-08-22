<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class santri extends Model
{
    //
    protected $table = "santri";
    protected $fillable = ['nama_lengkap', 'tempat_lahir', 'dob', 'jenis_kelamin', 'no_kk', 'nama_ibu','nama_ayah','anak-ke','jumlah_anak','alamat','file_kk','file_ktp','status'];
    protected $primaryKey = 'id_santri';
}
