<?php

namespace App\Http\Controllers;

use App\Models\video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class videoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $video = video::all();
        return view('video.index',['video' => $video]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('video.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation = Validator::make($request->all(),[
            "judul" => "required",
            "link" => "required",
            "content" => "required|min:5",
        ])->validated();

        $video = new video();
        $video->judul = $request->get('judul');
        $video->link = $request->get('link');
        $video->content = $request->get('content');
        $video->created_by = auth::user()->id;
        $video->status = 'INACTIVE';
        $video->save();
        return redirect()->route('video.index')->with('status','Data Berhasil disimpan');
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
        $video = video::findOrfail($id);
        return view('video.edit',['video' => $video]);
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
        $validation = Validator::make($request->all(),[
            "judul" => "required",
            "link" => "required",
            "content" => "required|min:5",
        ])->validated();

        $video = video::findOrfail($id);
        $video->judul = $request->get('judul');
        $video->link = $request->get('link');
        $video->content = $request->get('content');
        $video->created_by = auth::user()->id;
        $video->status = 'INACTIVE';
        $video->save();
        return redirect()->route('video.index')->with('status','Data Berhasil diupdate');
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
    public function __construct()
    {
        $this->middleware('auth');
    }
}
