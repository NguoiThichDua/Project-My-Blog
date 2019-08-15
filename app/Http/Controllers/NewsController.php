<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\CommentNews;
use View;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::orderBy('created_at', 'desc')->paginate(9);
        return view('news.index')->with('news', $news);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('news.create');
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
            'title'     => 'required',
            'introduce' => 'required',
            'body'      => 'required',
            'image_1'   => 'image|nullable|max:1999',
            'image_2'   => 'image|nullable|max:1999',
            'image_3'   => 'image|nullable|max:1999',
        ]);

        //Handle file upload
        if($request->hasFile('image_1')){
            //Get filename with the extension
            $filenamewithExt = $request->file('image_1')->getClientOriginalName();
            
            //Get just filename
            $filename = pathinfo($filenamewithExt,PATHINFO_FILENAME);
            
            //Get just ext
            $extension = $request->file('image_1')->guessClientExtension();
            
            //FileName to store
            $fileNameToStoreb = $filename.'.'.time().'.'.$extension;
            
            //Upload Image
            $path = $request->file('image_1')->storeAs('public/images_post_news/background/',$fileNameToStoreb);
        }else{
            $fileNameToStoreb = 'noImage.jpg';
        }

         //Handle file upload
         if($request->hasFile('image_2')){
            //Get filename with the extension
            $filenamewithExt = $request->file('image_2')->getClientOriginalName();
            
            //Get just filename
            $filename = pathinfo($filenamewithExt,PATHINFO_FILENAME);
            
            //Get just ext
            $extension = $request->file('image_2')->guessClientExtension();
            
            //FileName to store
            $fileNameToStore1 = $filename.'.'.time().'.'.$extension;
            
            //Upload Image
            $path = $request->file('image_2')->storeAs('public/images_post_news/images/',$fileNameToStore1);
        }else{
            $fileNameToStore1 = 'noImage.jpg';
        }
        //Handle file upload
        if($request->hasFile('image_3')){
            //Get filename with the extension
            $filenamewithExt = $request->file('image_3')->getClientOriginalName();
            
            //Get just filename
            $filename = pathinfo($filenamewithExt,PATHINFO_FILENAME);
            
            //Get just ext
            $extension = $request->file('image_3')->guessClientExtension();
            
            //FileName to store
            $fileNameToStore2 = $filename.'.'.time().'.'.$extension;
            
            //Upload Image
            $path = $request->file('image_3')->storeAs('public/images_post_news/images/',$fileNameToStore2);
        }else{
            $fileNameToStore2 = 'noImage.jpg';
        }

        $c = new News;
        $c->title = $request->title;
        $c->introduce = $request->introduce;
        $c->body = $request->body;
        $c->user_id = auth()->user()->id;
        $c->image_1 = $fileNameToStoreb;
        $c->image_2 = $fileNameToStore1;
        $c->image_3 = $fileNameToStore2;
        $c->save();

        return redirect('/news')->with('success', 'Đã tạo bài viết');;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $new = News::find($id);

        $cc = CommentNews::where('news_id', $id)->paginate(10);    
        View::Share('cc',$cc);

        return view('news/show')->with('new', $new);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $new = News::find($id);
        return view('news.edit')->with('new', $new);
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
        $this->validate($request,[
            'title'     => 'required',
            'introduce' => 'required',
            'body'      => 'required',
            'image_1'   => 'image|nullable|max:1999',
            'image_2'   => 'image|nullable|max:1999',
            'image_3'   => 'image|nullable|max:1999',
        ]);

        //Handle file upload
        if($request->hasFile('image_1')){
            //Get filename with the extension
            $filenamewithExt = $request->file('image_1')->getClientOriginalName();
            
            //Get just filename
            $filename = pathinfo($filenamewithExt,PATHINFO_FILENAME);
            
            //Get just ext
            $extension = $request->file('image_1')->guessClientExtension();
            
            //FileName to store
            $fileNameToStoreb = $filename.'.'.time().'.'.$extension;
            
            //Upload Image
            $path = $request->file('image_1')->storeAs('public/images_post_news/background/',$fileNameToStoreb);
        }

         //Handle file upload
         if($request->hasFile('image_2')){
            //Get filename with the extension
            $filenamewithExt = $request->file('image_2')->getClientOriginalName();
            
            //Get just filename
            $filename = pathinfo($filenamewithExt,PATHINFO_FILENAME);
            
            //Get just ext
            $extension = $request->file('image_2')->guessClientExtension();
            
            //FileName to store
            $fileNameToStore1 = $filename.'.'.time().'.'.$extension;
            
            //Upload Image
            $path = $request->file('image_2')->storeAs('public/images_post_news/images/',$fileNameToStore1);
        }
        //Handle file upload
        if($request->hasFile('image_3')){
            //Get filename with the extension
            $filenamewithExt = $request->file('image_3')->getClientOriginalName();
            
            //Get just filename
            $filename = pathinfo($filenamewithExt,PATHINFO_FILENAME);
            
            //Get just ext
            $extension = $request->file('image_3')->guessClientExtension();
            
            //FileName to store
            $fileNameToStore2 = $filename.'.'.time().'.'.$extension;
            
            //Upload Image
            $path = $request->file('image_3')->storeAs('public/images_post_news/images/',$fileNameToStore2);
        }

        $c =  News::find($id);

        $c->title = $request->title;
        $c->introduce = $request->introduce;
        $c->body = $request->body;
        $c->user_id = auth()->user()->id;

        if($request->hasFile('image_1')){
            $c->image_1 = $fileNameToStoreb;
        }
        if($request->hasFile('image_2')){
            $c->image_2 = $fileNameToStore1;
        }
        if($request->hasFile('image_3')){
            $c->image_3 = $fileNameToStore2;
        }
        $c->save();

        return redirect('/news')->with('success', 'Đã cập nhật bài viết');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $new =  News::find($id);
    
        //Delete Image
        if($new->image_1 != 'noImage.jpg'){
            Storage::delete('public/images_post_news/background/'.$new->image_1);
        }
        if($new->image_2 != 'noImage.jpg'){
            Storage::delete('public/images_post_news/images/'.$new->image_2);
        }
        if($new->image_3 != 'noImage.jpg'){
            Storage::delete('public/images_post_news/images/'.$new->image_3);
        }

        $new->delete();

        return redirect('/news')->with('success', 'Đã xóa bài viết');
    }
}
