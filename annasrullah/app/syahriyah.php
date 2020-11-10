<?php

namespace App;
use App\daftar;
use Illuminate\Database\Eloquent\Model;
use Yajra\DataTables\DataTables;

class syahriyah extends Model
{
    protected $table = "syahriyahs";
    protected $primaryKey = 'id';
    protected $unique = 'id_syahriyah';
    public $timestamps = false;
    protected $fillable = ['bulan', 'jumlah', 'status', 'tgl','bukti'];

    protected function getid()
    {
        DB::select('select id_syahriyah from syariyahs where status = "Belum Dibayar" and id_santri = $request->user()->id_santri');
    }

    
    public function daftar()
    {
    return $this->hasOne(daftar::class);
    }
}
