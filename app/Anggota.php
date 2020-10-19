<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    protected $table        = 'anggota';
    protected $primarykey   = 'id';

    static $rules = [
        'nama'      => 'required',
        'alamat'    => 'required',
    ];

    protected $perPage  = 20;

    protected $fillable =   [   'nama', 'alamat', 'tempat_lahir', 'tanggal_lahir',
                                'jenis_kelamin', 'STATUS', 'telepon', 'keterangan' ];
}
