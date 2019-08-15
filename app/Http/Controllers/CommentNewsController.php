<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CommentNews;
use Auth;
use View;

class CommentNewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        if(Auth::guest()){
            return redirect()->back()->with('error', 'Hãy đăng nhập để comment');
        }

        $this->validate($request, [
            'body'  => 'required'
        ]);

        $cc = new CommentNews;
        $cc->news_id = $request->new_id;
        $cc->user_id   = auth()->user()->id;
        $cc->body      = $request->body;
        $cc->save();

        return redirect()->back()->with('success', 'Đã comment');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
     
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $this->validate($request, [
            'body'  => 'required'
        ]);
        $post =  CommentNews::find($id);
        
        $cc->body      = $request->body;
        $cc->save();

        return redirect()->back()->with('success', 'Đã Chỉnh Sửa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comment = CommentNews::find($id);
        $comment->delete();
        return redirect()->back()->with('success', 'Đã xóa comment');
    }
}

