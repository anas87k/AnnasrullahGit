<?php

use Illuminate\Support\Facades\DB;
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Yajra\DataTables\DataTables;
use Yajra\DataTables\Html\Builder;
use Session;
use App\daftar;
use App\User;
use App\Input;
use DB;
use Alert;
use App\syahriyah;
use Str;

class DaftarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ids = daftar::getId();
        return view('menu.pendaftaran',compact('ids'));

    }

    public function admindaftar(Request $request, Builder $htmlBuilder)
    {

        }

     public function showbayar(Request $request)
     {
         return view('menu.bayar');
     }

     public function checkid(Request $request)
    {
        $user = DB::table('daftars')->where('id_santri','=',($request->id_santri))->count() > 0;
        if (!($user)) {
            return redirect()->route('daftar.index');

        } else {
            Alert::warning('Anda sudah melengkapi data sebelumnya. jika itu bukan anda silahkan hubungi admin. Terima kasih', 'Maaf');
            return redirect()->route('home');
        }

    }

    public function checkbayar(Request $request)
    {
        $user = DB::table('daftars')->where('id_santri','=',($request->user()->id_santri))->count() > 0;

        if (($user)) {
            return redirect()->route('checkbayars');

        } else {
            Alert::warning('Anda belum melengkapi data diri anda. silahkan lengkapi terlebih dahulu baru kemudian melakukan verifikasi pembayaran. Terima kasih', 'Maaf');
            return redirect()->route('home');
        }

    }

    public function checkbayars(Request $request)
    {
        $idb = DB::table('bayar')->where('id_santri','=',($request->user()->id_santri))->count() > 0;
        if (($idb)) {
            Alert::warning('Anda sudah melakukan verifikasi pembayaran sebelumnya. jika itu bukan anda silahkan hubungi admin. Terima kasih', 'Maaf');
            return redirect()->route('home');

        } else {
            return redirect()->route('bayar');
        }

    }

    public function adddata(Request $request)
    {

        $data=array();
        $data['id_santri']=$request->id_santri;
        $data['nama_lengkap']=$request->nama_lengkap;
        $data['jk']=$request->jk;
        $data['tempat']=$request->tempat;
        $data['tgl']=$request->tgl;
        $data['pendidikan']=$request->pendidikan;
        $data['nama_pendidikan']=$request->nama_pendidikan;
        $data['nama_ortu']=$request->nama_ortu;
        $data['pkrjn_ortu']=$request->pkrjn_ortu;
        $data['alamat_ortu']=$request->alamat_ortu;
        $data['telp_ortu']=$request->telp_ortu;
        $data['nama_wali']=$request->nama_wali;
        $data['pkrjn_wali']=$request->pkrjn_wali;
        $data['alamat_wali']=$request->alamat_wali;
        $data['telp_wali']=$request->telp_wali;
        $data['created_at']=$table->timestamps();

        \DB::table('daftars')->insert($data);
        Alert::Success('Selamat Anda berhasil melakukan pengisian data diri, jika ada yg tidak sesuai silahkan kirim pesan ke email admin', 'Berhasil');
        return redirect()->route('home');
    }

    public function bayar(Request $request)
    {
        $data=array();
        $data['id_santri']=$request->id_santri;
        $data['nama_lengkap']=$request->nama_lengkap;
        $data['email']=$request->email;
        $data['tglbayar']=$request->tglbayar;
        $data['bukti']=$request->bukti;


        \DB::table('bayar')->insert($data);
        DB::table('daftars')->where('id_santri',$request->id_santri)
            ->update(['tglbayar' => $request->tglbayar,'bukti' => $request->bukti]);
            Alert::Success('Selamat verifikasi pembayaran berhasil, jika ada yg tidak sesuai silahkan kirim pesan ke email admin', 'Berhasil');

            return view('home');
    }

}
