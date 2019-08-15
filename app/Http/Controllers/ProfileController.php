<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
/* Sử dụng User Model đây */
use App\User;
use App\Forum;
use App\Coding;
use App\News;
use View;
use DB;

class ProfileController extends Controller
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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $users_id = auth()->user()->id;
        $users = DB::SELECT("SELECT * FROM users WHERE id = $users_id");

        $codeFormCoding = Coding::orderBy('created_at', 'desc')->paginate(3);
        View::Share('code',$codeFormCoding);

        $newsFormCoding = News::orderBy('created_at', 'desc')->paginate(3);
        View::Share('news',$newsFormCoding);

        $forumFormCoding = Forum::orderBy('created_at', 'desc')->paginate(3);
        View::Share('forum',$forumFormCoding);

        return view('profiles.index')->with('users',$users);

        // $users_id = auth()->user()->id;
        // $user = User::find($users_id)->forum()->paginate(3);
        // return view('profiles.index')->with('forum', $user);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $profile =  User::find($id);
        if(auth()->user()->id != $id){
            return redirect('/profile')->with('error', 'Bạn không có quyền cho tác vụ này');
        }
        return view('profiles.edit')->with('profile', $profile);
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
            'name'              =>      'required',
            'email'             =>      'required',
            'cover_image'       =>      'image|nullable|max:1999',
            'background_image'  =>      'image|nullable|max:1999',
            'info'              =>      'required',
            'cover_name'        =>      'required'
        ]);

        //Handle file upload || Sử lí cho việc tên ảnh bị trùng
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
            $path = $request->file('cover_image')->storeAs('public/cover_images/',$fileNameToStore);
        }else{
            $fileNameToStore = 'noImage.png';
        }

        //Handle file upload || Sử lí cho việc tên ảnh bị trùng
        if($request->hasFile('background_image')){
            //Get filename with the extension
            $filenamewithExt = $request->file('background_image')->getClientOriginalName();
            
            //Get just filename
            $filename = pathinfo($filenamewithExt,PATHINFO_FILENAME);
            
            //Get just ext
            $extension = $request->file('background_image')->guessClientExtension();
            
            //FileName to store
            $fileNameToStores = $filename.'.'.time().'.'.$extension;
            
            //Upload Image
            $path = $request->file('background_image')->storeAs('public/background_image/',$fileNameToStores);
        }else{
            $fileNameToStores = 'noImage.jpg';
        }
        //Create Post
        $profile =  User::find($id);

        $profile->name          = $request->input('name');
        $profile->email         = $request->input('email');
        $profile->info          = $request->input('info');
        $profile->cover_name    = $request->input('cover_name');

        if($request->hasFile('cover_image')){
            $profile->image = $fileNameToStore;
        }
        if($request->hasFile('background_image')){
            $profile->background_image = $fileNameToStores;
        }

        $profile->save();

        return redirect('/profile')->with('success', 'Cập nhật thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user =  User::find($id);
        
        //Delete Image
        if($user->cover_image != 'noImage.png'){
            Storage::delete('public/cover_images/'.$user->cover_image);
        }
        if($user->background_image != 'noImage.jpg'){
            Storage::delete('public/background_image/'.$user->background_image);
        }

        $user->delete();

        return redirect('/login')->with('success', 'Đã xóa tài khoản ra khỏi hệ thống');
    }
}
