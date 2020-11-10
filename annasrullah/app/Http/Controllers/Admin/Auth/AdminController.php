<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Yajra\DataTables\Html\Builder;
use App\Daftar;
use Session;
use DB;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function admin(Request $request, Builder $htmlBuilder)
    {
        if ($request->ajax()) {
            $daftars = Daftar::select(['id_santri','nama_lengkap','tempat','tgl','created_at']);
            return DataTables::of($daftars)
            ->addColumn('action', function($daftars){
            return view('datatable._actiond', [
                'model' => $daftars,
                'del_url' => route('admin.delete', $daftars->id_santri),
                'edit_url' => route('admin.edit', $daftars->id_santri)]);
            })

            ->addColumn('content', function($daftars){
                return strip_tags($daftars->content);
            })
            ->make(true);

          }

          $html = $htmlBuilder
            ->addColumn(['data'=>'id_santri', 'name'=>'id_santri', 'title'=>'ID Santri'])
            ->addColumn(['data'=>'nama_lengkap', 'name'=>'nama_lengkap', 'title'=>'Nama Lengkap'])
            ->addColumn(['data'=>'tempat', 'name'=>'tempat', 'title'=>'Tempat Lahir'])
            ->addColumn(['data'=>'tgl', 'name'=>'tgl', 'title'=>'Tanggal Lahir'])
            ->addColumn(['data'=>'created_at', 'name'=>'created_at', 'title'=>'Tanggal Daftar'])
            ->addColumn(['data' => 'action','name' => 'action', 'title' => 'Action', 'orderable'
            => false, 'searchable' => false]);

          return view('admin.pendaftaran')->with(compact('html'));
    }
    

    public function edit($id_santri)
    {
        $daftar = DB::table('daftars')->where('id_santri',$id_santri)->get();
        return view('admin.datadaftar', ['daftar' => $daftar])->with(compact('daftar'));
    }

    public function destroy($id_santri)
    {
        DB::table('daftars')->where('id_santri',$id_santri)->delete();
        Alert::Success('Data Berhasil dihapus', 'Berhasil');
        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Data Post berhasil dihapus"
            ]);
        return redirect()->route('admin.home');
    }
    
}
