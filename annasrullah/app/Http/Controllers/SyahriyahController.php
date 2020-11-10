<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\syahriyah;
use Yajra\DataTables\DataTables;
use Yajra\DataTables\Html\Builder;
use Session;
use Str;

class SyahriyahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index(Request $request, Builder $htmlBuilder)
     {
        if ($request->ajax()) {
            $posts = syahriyah::select(['id_syahriyah','bulan','jumlah','tgl','status'])->where('id_santri',($request->user()->id_santri));
            return DataTables::of($posts)
            ->addColumn('content', function($posts){
                return strip_tags($posts->content);
            })
            ->make(true);

          }

          $html = $htmlBuilder
            ->addColumn(['data'=>'id_syahriyah', 'name'=>'id_syahriyah', 'title'=>'ID Syahriyah'])
            ->addColumn(['data'=>'bulan', 'name'=>'bulan', 'title'=>'Bulan', 'orderable'
            => false, 'searchable' => false])
            ->addColumn(['data'=>'jumlah', 'name'=>'jumlah', 'title'=>'Jumlah', 'orderable'
            => false, 'searchable' => false])
            ->addColumn(['data'=>'tgl', 'name'=>'tgl', 'title'=>'Tanggal', 'orderable'
            => false, 'searchable' => false])
            ->addColumn(['data'=>'status', 'name'=>'status', 'title'=>'Status', 'orderable'
            => false, 'searchable' => false]);

          return view('menu.syahriyah')->with(compact('html'));
    }

    public function datasyahriyah()
    {
        return DataTables::of(syahriyah::query())->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=array();
        $data['id_syahriyah']=$request->id_syahriyah;
        $data['bulan']=$request->bulan;
        $data['jumlah']=$request->jumlah;
        $data['status']=$request->status;
        $data['tgl']=$request->tgl;
        $data['bukti']=$request->bukti;

        \DB::table('syahriyahs')->insert($data);
        Session::put('message','DataInserted');
        return redirect()->route('syahriyah.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $id = syahriyah::getid();
        return view('menu._syahriyah',compact('id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_syahriyah)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $syahriyah = DB::table('syahriyahs')->where('id_syahriyah',$id_syahriyah)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('admin.edit', ['syahriyah' => $syahriyah])->with(compact('syahriyah'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_syahriyah)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function showbayar()
    {

        return view('menu.syahriyah2');
    }

    public function bayar($id_syahriyah)
    {
        return view('menu.syahriyah2');
    }

}
