<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use DB;

class ContactController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        
        $contact = Contact::orderBy('created_at', 'desc')->paginate(10);                           //phân trang đây nè || Post này post Tổng xài cho index || Post dưới kia là post của 1 thằng khi đã biết id

        return view('contact.index')->with('contact', $contact);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' =>  'required',
            'body'  =>  'required'
        ]);

        $id = auth()->user()->id;

        $contact = new Contact;
        $contact->user_id   =   $id;
        $contact->title     =   $request->input('title');
        $contact->body      =   $request->input('body');
        $contact->save();

        return redirect('/about')->with('success', 'Đã gửi lời nhắn');
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
        $contact =  Contact::find($id);

        $contact->delete();

        return redirect()->back()->with('success', 'Đã xóa thành công');
    }
}
