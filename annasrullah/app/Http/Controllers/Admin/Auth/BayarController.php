<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Yajra\DataTables\Html\Builder;
use Session;
use App\Daftar;
use DB;

class BayarController extends Controller
{    
    public function index(Request $request, Builder $htmlBuilder)
    {
        if ($request->ajax()) {
            $bayars = daftar::select(['id','id_santri','nama_lengkap','tglbayar','bukti']);
            return DataTables::of($bayars)
            ->addColumn('action', function($bayars){
                return view('datatable._actionb', [
                    'model' => $bayars,
                    'edit_url' => route('bayar.edit', $bayars->id_santri)]);
                })
            ->addColumn('content', function($bayars){
                return strip_tags($bayars->content);
            })
            ->make(true);

          }

          $html = $htmlBuilder
          ->addColumn(['data'=>'id', 'name'=>'id', 'title'=>'ID'])
            ->addColumn(['data'=>'id_santri', 'name'=>'id_santri', 'title'=>'ID Santri'])
            ->addColumn(['data'=>'nama_lengkap', 'name'=>'nama_lengkap', 'title'=>'Nama Lengkap'])
            ->addColumn(['data'=>'tglbayar', 'name'=>'tglbayar', 'title'=>'Tanggal Pembayaran'])
            ->addColumn(['data'=>'bukti', 'name'=>'bukti', 'title'=>'Bukti'])
            ->addColumn(['data' => 'action','name' => 'action', 'title' => 'Action', 'orderable'
            => false, 'searchable' => false]);

          return view('admin.bayar')->with(compact('html'));
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
         return view('admin.bayars', ['daftar' => $daftar])->with(compact('daftar'));
     }
}
