<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class guru extends Model
{
    //
    protected $table = "guru";
    protected $fillable = ['nama_lengkap', 'tempat_lahir', 'dob', 'jenis_kelamin','nik','no_kk','npwp','pendidikan','tgl_masuk_kerja','alamat','file_kk','file_ktp','file_npwp','file_ttd','note','status'];
    protected $primaryKey = 'id_guru';
}
