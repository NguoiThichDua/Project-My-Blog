<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Coding;

class CodingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $code = Coding::orderBy('created_at', 'desc')->paginate(3);    
        return view('coding.index')->with('code', $code);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('coding.create');
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
            $path = $request->file('image_1')->storeAs('public/images_post_coding/background/',$fileNameToStoreb);
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
            $path = $request->file('image_2')->storeAs('public/images_post_coding/images/',$fileNameToStore1);
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
            $path = $request->file('image_3')->storeAs('public/images_post_coding/images/',$fileNameToStore2);
        }else{
            $fileNameToStore2 = 'noImage.jpg';
        }

        $c = new Coding;
        $c->title = $request->title;
        $c->introduce = $request->introduce;
        $c->body = $request->body;
        $c->user_id = auth()->user()->id;
        $c->image_1 = $fileNameToStoreb;
        $c->image_2 = $fileNameToStore1;
        $c->image_3 = $fileNameToStore2;
        $c->save();

        return redirect('/coding')->with('success', 'Đã tạo bài viết');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $code = Coding::find($id);
        return view('coding/show')->with('code', $code);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $code = Coding::find($id);
        
        return view('coding.edit')->with('code', $code);
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
            $path = $request->file('image_1')->storeAs('public/images_post_coding/background/',$fileNameToStoreb);
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
            $path = $request->file('image_2')->storeAs('public/images_post_coding/images/',$fileNameToStore1);
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
            $path = $request->file('image_3')->storeAs('public/images_post_coding/images/',$fileNameToStore2);
        }

        $c =  Coding::find($id);

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

        return redirect('/coding')->with('success', 'Đã cập nhật bài viết');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $code =  Coding::find($id);
    
        //Delete Image
        if($code->image_1 != 'noImage.jpg'){
            Storage::delete('public/images_post_coding/background/'.$code->image_1);
        }
        if($code->image_2 != 'noImage.jpg'){
            Storage::delete('public/images_post_coding/images/'.$code->image_2);
        }
        if($code->image_3 != 'noImage.jpg'){
            Storage::delete('public/images_post_coding/images/'.$code->image_3);
        }

        $code->delete();

        return redirect('/coding')->with('success', 'Đã xóa bài viết');
    }
}
