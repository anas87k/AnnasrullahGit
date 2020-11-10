<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\syahriyah;
use Yajra\DataTables\DataTables;
use Yajra\DataTables\Html\Builder;
use Session;
use Str;
use DB;

class AdminSyahriyahController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Builder $htmlBuilder)
    {
        if ($request->ajax()) {
            $syahriyahs = syahriyah::select(['id','id_syahriyah','bulan','jumlah','status']);
            return DataTables::of($syahriyahs)
            ->addColumn('action', function($syahriyahs){
            return view('datatable._action', [
                'model' => $syahriyahs,
                // 'form_url' => route('posts.destroy', $posts->id),
                'edit_url' => route('syahriyahs.edit', $syahriyahs->id_syahriyah)]);
            })

            ->addColumn('content', function($syahriyahs){
                return strip_tags($syahriyahs->content);
            })
            ->make(true);

          }

          $html = $htmlBuilder
          ->addColumn(['data'=>'id', 'name'=>'id', 'title'=>'ID Santri'])
            ->addColumn(['data'=>'id_syahriyah', 'name'=>'id_syahriyah', 'title'=>'ID Syahriyah'])
            ->addColumn(['data'=>'bulan', 'name'=>'bulan', 'title'=>'Bulan', 'orderable'
            => false, 'searchable' => false])
            ->addColumn(['data'=>'jumlah', 'name'=>'jumlah', 'title'=>'Jumlah', 'orderable'
            => false, 'searchable' => false])
            ->addColumn(['data'=>'status', 'name'=>'status', 'title'=>'Status'])
            ->addColumn(['data' => 'action','name' => 'action', 'title' => 'Action', 'orderable'
            => false, 'searchable' => false]);

          return view('admin.syahriyah')->with(compact('html'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $syahriyahs
     * @return \Illuminate\Http\Response
     */
    public function edit($id_syahriyah)
    {
        $syahriyah = DB::table('syahriyahs')->where('id_syahriyah',$id_syahriyah)->get();
        return view('admin.edit', ['syahriyah' => $syahriyah])->with(compact('syahriyah'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $syahriyahs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        DB::table('syahriyahs')->where('id_syahriyah',$request->id_syahriyah)
            ->update(['status' => $request->status]);
        return redirect()->route('syahriyahs.index');
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
    
    public function showtambah()
    {
        return view('admin.tambahsyah');
    }

    public function simpan(Request $request)
    {
        $data=array();
        $data['id_santri']=$request->id_santri;
        $data['id_syahriyah']=$request->id_syahriyah;
        $data['bulan']=$request->bulan;
        $data['jumlah']=$request->jumlah;

        \DB::table('syahriyahs')->insert($data);
        Alert::Success('Pengisian data syahriyah sukses', 'Berhasil');
        return redirect()->route('syahriyahs.index');
    }
}
