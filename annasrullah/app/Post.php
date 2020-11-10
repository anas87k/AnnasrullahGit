<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $primaryKey = 'id';
    protected $unique = 'id_syahriyah';
    public $timestamps = false;
    protected $fillable = ['bulan', 'jumlah', 'status', 'tgl','bukti'];
}
