<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Yajra\Datatables\Datatables;
use Yajra\DataTables\Html\Builder;
use Session;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Builder $htmlBuilder)
    {
        if ($request->ajax()) {
            $posts = Post::select(['id','bulan','jumlah','status']);
            return DataTables::of($posts)
            ->addColumn('content', function($posts){
                return strip_tags($posts->content);
            })
            ->make(true);

          }

          $html = $htmlBuilder
            ->addColumn(['data'=>'bulan', 'name'=>'bulan', 'title'=>'Bulan'])
            ->addColumn(['data'=>'jumlah', 'name'=>'jumlah', 'title'=>'Jumlah'])
            ->addColumn(['data'=>'status', 'name'=>'status', 'title'=>'Status']);

          return view('menu.syahriyah')->with(compact('html'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['title' => 'required','content'=>'required']);
        $posts = Post::create(
            ['title' => $request->title,
            'seotitle' => str_slug($request->title, '-'),  'author' => $request->author,
            'headline' => $request->headline,
            'active' => $request->active,
            'image' => $request->fupload,
            'content' => $request->content,
            'status' => $request->status
            ]);
            Session::flash("flash_notification", [
                "level"=>"success",
                "message"=>"Data Post Berhasil Tersimpan"
               ]);
               return redirect()->route('posts.index');
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $posts = Post::find($id);
        return view('posts.edit', ['posts' => $posts])->with(compact('posts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, ['title' => 'required','content' => 'required']);
        $posts = Post::find($id);
        $posts->update(['title' => $request->title, 'seotitle' => str_slug($request->title, '-'),
        'author' => $request->author, 'image' => $request->image, 'content' => $request->content,
        'status' => $request->status]);
        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Data Post berhasil diubah"
           ]);
        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::destroy($id);
        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Data Post berhasil dihapus"
            ]);
        return redirect()->route('posts.index');
    }
}
