<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CommentForum;
use DB;

class CommentForumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //  $comment = CommentForum::all();

        //  return view('commentforum.index')->with('comment', $comment);
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
        $this->validate($request,[
            'body'  =>  'required'
        ]);

        $comment = new CommentForum;
        $comment->forum_id = $request->forum_id;
        $comment->user_id  = auth()->user()->id;
        $comment->body  = $request->input('body');
        $comment->save();

        return redirect('/comment/'.$request->input('forum_id'))->with('success', 'Đã Comment');

    }

    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        $comment = CommentForum::where('forum_id', $id)->paginate(10);      
        return view('commentforum.show')->with('comments', $comment);
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
}
