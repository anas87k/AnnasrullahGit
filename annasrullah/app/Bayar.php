<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bayar extends Model
{
    protected $table = "bayar";
    protected $primaryKey = 'id';
    protected $unique = 'id_santri';
    public $timestamps = false;
    protected $fillable = ['id_santri','nama_lengkap', 'jk', 'tgl', 'bukti'];
}
