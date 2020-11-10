<?php

namespace App;
use App\syahriyah;
use Illuminate\Database\Eloquent\Model;

class daftar extends Model
{
    protected $primaryKey = 'id';
    protected $unique = 'id_santri';
    public $timestamps = false;
    protected $fillable = ['id_santri','nama_lengkap', 'jk', 'tempat', 'tgl', 'pendidikan', 'nama_pendidikan', 'nama_ortu', 'pkrjn_ortu',
    'alamat_ortu', 'telp_ortu', 'nama_wali', 'pkrjn_wali', 'alamat_wali', 'telp_wali'];
    
    
    public static function getId(){
        return $getId = \DB::table('daftars')->orderBy('id','DESC')->take(1)->get();
    }
    public function syahriyah()
    {
    return $this->hasOne(syahriyah::class);
    }
}
