@extends('layouts.app')

@section('content')
    @if(!Auth::guest())         <!--Kiểm tra coi m đăng nhập chưa-->
        <a href="/MyBlog/public/forum/create" class="col-md-4 btn btn-primary">Create Post</a>
    @else
        <a href="/MyBlog/public/login" class="col-md-4 btn btn-primary">Login to create post</a>
    @endif
    
    @if (count($forum) > 0)
        @foreach ($forum as $f)
            <a href="/MyBlog/public/forum/{{$f->id}}" style="text-decoration: none">
                <div class="alert alert-secondary mt-3">
                    <div class="row">
                        <div class="col-md-4 col-ms-4 text-center">
                            <img src="/MyBlog/public/storage/cover_images_post/{{$f->image}}" alt="Không có ảnh" width="70%" height="150px">
                        </div>
                        <div class="col-md-8 col-ms-8">
                            <h3>{{$f->title}}</h3> 
                            <hr>
                            <span>Created: {{$f->created_at}} </span><br>
                            
                            <span>By: {{$f->User->name}}</span>                     <!--Còn lỗi: khi xóa tài khoản thì name ở đây nó kiếm ko ra-->
                        </div>
                    </div>
                </div>
            </a>  
        @endforeach
        <hr>

        <div class="d-flex justify-content-end">
            {{-- Phân trang --}}
            {{$forum->links()}}
        </div>
    @else
        Không có bài viết
    @endif
@endsection