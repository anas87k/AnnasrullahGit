<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\daftar;
use Session;
use DB;
use Alert;
use Auth;
use App\Input;

class IjinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('menu.ijin');
    }

    public function addijin(Request $request){
        $data=array();
        $data['id_santri']=$request->user()->id_santri;
        $data['tglijin']=$request->tglijin;
        $data['jamijin']=$request->jamijin;
        $data['tglkmb']=$request->tglkmb;
        $data['jamkmb']=$request->jamkmb;
        $data['perihal']=$request->perihal;
        $data['alasan']=$request->alasan;

        \DB::table('ijins')->insert($data);
        \DB::table('daftar')->insert($data);
        Alert::Success('Silahkan tunggu konfirmasi dari pengurus. jika diperbolehkan
        Selamat bersenang-senang diluar pondok, jangan lupa tetap ingat kepada Allah SWT, namun jika tidak tetap semangat dipondok', 'Ijin Berhasil');
        return redirect()->route('home');
    }

    public function checkijin(Request $request)
    {
        $idb = DB::table('ijins')->where('id_santri','=',($request->user()->id_santri))->count() > 0;
        // $idb = DB::table('ijins')->where('id_santri',($request->id_santri))->get();

        if (($idb)) {
            Alert::warning('Anda sedang ijin, absen kepulangan terlebih dahulu untuk ijin selanjutnya', 'Maaf');
            return redirect()->route('home');
        
        } else {
            return redirect()->route('ijin.index');
        }
    }

    public function absenijin(Request $request)
    {
        $ijin = DB::table('ijins')->where('id_santri','=',($request->user()->id_santri))->count() > 0;
        if ($ijin){
            DB::table('daftar')->where('id_santri',$request->user()->id_santri)->where('updated_at',NULL)
            ->update(['updated_at' => now()]);
            DB::table('ijins')->where('id_santri',$request->user()->id_santri)->delete();
            Alert::Success('Absen Berhasil, selamat kembali ke penjara suci', 'Berhasil');
            return redirect()->route('home');
        } else {
            Alert::warning('Anda tidak kemana-mana karena belum melakukan ijin', 'Maaf');
            return redirect()->route('home');
        }
        
    }

    public function pulang()
    {
        return view('menu.pulang');
    }
    
    public function ijinpulang(Request $request){
        $data=array();
        $data['id_santri']=$request->user()->id_santri;
        $data['tglijin']=$request->tglijin;
        $data['jamijin']=$request->jamijin;
        $data['tglkmb']=$request->tglkmb;
        $data['jamkmb']=$request->jamkmb;
        $data['perihal']=$request->perihal;
        $data['alasan']=$request->alasan;

        \DB::table('ijins')->insert($data);
        \DB::table('daftar')->insert($data);
        Alert::Success('Silahkan tunggu konfirmasi dari pengurus. jika diperbolehkan
        Selamat bersenang-senang dirumah, jangan lupa tetap ingat kepada Allah SWT, namun jika tidak tetap semangat dipondok', 'Ijin Berhasil');
        return redirect()->route('home');
    }

    public function cekpulang(Request $request)
    {
        $idb = DB::table('ijins')->where('id_santri','=',($request->user()->id_santri))->count() > 0;
        // $idb = DB::table('ijins')->where('id_santri',($request->id_santri))->get();

        if (($idb)) {
            Alert::warning('Anda sedang ijin, absen kepulangan terlebih dahulu untuk ijin selanjutnya', 'Maaf');
            return redirect()->route('home');
        
        } else {
            return redirect()->route('ijin.pulang');
        }
    }

    
    public function tentang()
    {
        return view('menu.tentang');
    }

}
