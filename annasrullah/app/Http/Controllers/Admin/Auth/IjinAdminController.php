<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Yajra\DataTables\Html\Builder;
use Session;
use App\Daftar;
use DB;

class IjinAdminController extends Controller
{    
    public function ijinkeluar(Request $request, Builder $htmlBuilder)
    {
        if ($request->ajax()) {
            $ijin = DB::table('daftar')->select('id_santri','tglijin','jamijin','tglkmb','jamkmb','alasan','updated_at')->where('perihal','=','Keluar Area');
            return DataTables::of($ijin)
            ->make(true);

          }

          $html = $htmlBuilder
          ->addColumn(['data'=>'id_santri', 'name'=>'id_santri', 'title'=>'ID Santri'])
            ->addColumn(['data'=>'tglijin', 'name'=>'tglijin', 'title'=>'Tanggal Ijin'])
            ->addColumn(['data'=>'jamijin', 'name'=>'jamijin', 'title'=>'Jam Ijin'])
            ->addColumn(['data'=>'tglkmb', 'name'=>'tglkmb', 'title'=>'Tanggal Kembali'])
            ->addColumn(['data'=>'jamkmb', 'name'=>'jamkmb', 'title'=>'Jam Kembali'])
            ->addColumn(['data'=>'alasan', 'name'=>'alasan', 'title'=>'Alasan'])
            ->addColumn(['data'=>'updated_at', 'name'=>'updated_at', 'title'=>'Absen']);

          return view('admin.keluar')->with(compact('html'));
    }
  
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $syahriyahs
     * @return \Illuminate\Http\Response
     */
     public function edit($id_santri)
     {
            $daftar = DB::table('daftars')->where('id_santri',$id_santri)->get();
            // passing data pegawai yang didapat ke view edit.blade.php
         return view('admin.edit', ['daftar' => $daftar])->with(compact('daftar'));
     }

     public function ijinpulang(Request $request, Builder $htmlBuilder)
    {
        if ($request->ajax()) {
            $ijin = DB::table('daftar')->select('id_santri','tglijin','jamijin','tglkmb','jamkmb','alasan','updated_at')->where('perihal','=','Pulang');
            return DataTables::of($ijin)
            ->make(true);

          }

          $html = $htmlBuilder
          ->addColumn(['data'=>'id_santri', 'name'=>'id_santri', 'title'=>'ID Santri'])
            ->addColumn(['data'=>'tglijin', 'name'=>'tglijin', 'title'=>'Tanggal Ijin'])
            ->addColumn(['data'=>'jamijin', 'name'=>'jamijin', 'title'=>'Jam Ijin'])
            ->addColumn(['data'=>'tglkmb', 'name'=>'tglkmb', 'title'=>'Tanggal Kembali'])
            ->addColumn(['data'=>'jamkmb', 'name'=>'jamkmb', 'title'=>'Jam Kembali'])
            ->addColumn(['data'=>'alasan', 'name'=>'alasan', 'title'=>'Alasan'])
            ->addColumn(['data'=>'updated_at', 'name'=>'updated_at', 'title'=>'Absen']);

          return view('admin.pulang')->with(compact('html'));
    }



}
