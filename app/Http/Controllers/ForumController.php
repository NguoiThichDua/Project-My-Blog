<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Forum;
use DB;

class ForumController extends Controller
{
    //  /**
    //  * Create a new controller instance.
    //  *
    //  * @return void
    //  */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$forum = DB::SELECT("SELECT * FROM forum");
        $forum = Forum::orderBy('created_at', 'desc')->paginate(3);                           //phân trang đây nè || Post này post Tổng xài cho index || Post dưới kia là post của 1 thằng khi đã biết id

        return view('forum.index')->with('forum', $forum);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('forum.create');
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
            'body'  =>  'required',
            'cover_image'   =>  'image|nullable|max:1999'
        ]);

        //Handle file upload
        if($request->hasFile('cover_image')){
            //Get filename with the extension
            $filenamewithExt = $request->file('cover_image')->getClientOriginalName();
            
            //Get just filename
            $filename = pathinfo($filenamewithExt,PATHINFO_FILENAME);
            
            //Get just ext
            $extension = $request->file('cover_image')->guessClientExtension();
            
            //FileName to store
            $fileNameToStore = $filename.'.'.time().'.'.$extension;
            
            //Upload Image
            $path = $request->file('cover_image')->storeAs('public/cover_images_post/',$fileNameToStore);
        }else{
            $fileNameToStore = 'noImage.png';
        }

        $f = new Forum;
        $f->title = $request->input('title');
        $f->body = $request->input('body');
        $f->user_id = auth()->user()->id;
        $f->image = $fileNameToStore;
        $f->save();

        return redirect('/forum')->with('success', 'Đã tạo bài viết');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $forum = Forum::find($id);
        return view('forum.show')->with('forum', $forum);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $forum = Forum::find($id);
        if(auth()->user()->id != $forum->user_id){
            return redirect('/forum')->with('error', 'Bạn không có quyền cho tác vụ này');
        }
        return view('forum.edit')->with('forum', $forum);
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
            'title'         =>      'required',
            'body'          =>      'required',
            'cover_image'   =>  'image|nullable|max:1999'
        ]);

        //Handle file upload
        if($request->hasFile('cover_image')){
            //Get filename with the extension
            $filenamewithExt = $request->file('cover_image')->getClientOriginalName();
            
            //Get just filename
            $filename = pathinfo($filenamewithExt,PATHINFO_FILENAME);
            
            //Get just ext
            $extension = $request->file('cover_image')->guessClientExtension();
            
            //FileName to store
            $fileNameToStore = $filename.'.'.time().'.'.$extension;
            
            //Upload Image
            $path = $request->file('cover_image')->storeAs('public/cover_images_post/',$fileNameToStore);
        }
        
        //Create Post
        $post =  Forum::find($id);

        $post->title = $request->input('title');
        $post->body = $request->input('body');

        if($request->hasFile('cover_image')){
            $post->image = $fileNameToStore;
        }
        $post->save();

        return redirect('/forum')->with('success', 'Đã cập nhật bài viết');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post =  Forum::find($id);
        
        //Kiểm tra coi nó có phải là ng đăng bài hay không để có thể xóa
        if(auth()->user()->id != $post->user_id){
            return redirect('/posts')->with('error', 'Bạn không có quyền cho tác vụ này');
        }
    
        //Delete Image
        if($post->image != 'noImage.jpg'){
            Storage::delete('public/cover_images_post/'.$post->image);
        }

        $post->delete();

        return redirect('/forum')->with('success', 'Đã xóa bài viết');
    }
}
