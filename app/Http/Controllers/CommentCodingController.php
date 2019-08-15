<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CommentCoding;
use Auth;

class CommentCodingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
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
            return redirect('/coding/'.$request->coding_id)->with('error', 'Hãy đăng nhập để comment');
        }

        $this->validate($request, [
            'body'  => 'required'
        ]);

        $cc = new CommentCoding;
        $cc->coding_id = $request->coding_id;
        $cc->user_id   = auth()->user()->id;
        $cc->body      = $request->body;
        $cc->save();

        return redirect()->back()->with('success', 'Đã comment');;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cc = CommentCoding::where('coding_id', $id)->paginate(999);      
        return view('commentcoding.show')->with('cc', $cc);
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
