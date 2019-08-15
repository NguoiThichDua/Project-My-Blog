@extends('layouts.app')

@section('content')
    <img class="rounded-lg" width="100%" height="500px" alt="No Image" src="/MyBlog/public/storage/cover_images_post/{{$forum->image}}"/>
    <h1 class="mt-3" style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">{{$forum->title}}</h1>
    <small>Written on: {{$forum->created_at}}</small>
    <hr>

    <div class="jumbotron">{!!$forum->body!!}</div>                <!-- !! là để đọc được HTML-->
    <hr>
    
	<div class="row">
        <div class="col-md-4"><a href="/MyBlog/public/forum/" class="btn btn-success">Go back</a></div>
        <div class="col-md-4 d-flex justify-content-center">
            @if (!Auth::guest())
                @if(Auth::user()->id == $forum->user_id)     <!--Coi m có phải thằng đăng bài hay ko-->                 <!--Còn lỗi chỗ này-->
                    <a href="/MyBlog/public/forum/{{$forum->id}}/edit" class="btn btn-warning">Edit</a>
                    {!! Form::open(['action' => ['ForumController@destroy', $forum->id], 'method' => 'POST','class' => 'pull-right d-inline']) !!}
                        {{Form::hidden('_method','DELETE')}}
                        {{Form::submit('Delete', ['class'=>'btn btn-danger'])}}
                    {!! Form::close() !!} 
                @endif
            @endif
        </div>
        <div class="col-md-4">
            @if(!Auth::guest())         <!--Kiểm tra coi m đăng nhập chưa-->
                <div class="d-flex justify-content-end">
                        <a href="/MyBlog/public/comment/{{$forum->id}}" class="btn btn-info">Comment</a>                <!-- chạy sang show-->
                </div>
            @else
                <div class="d-flex justify-content-end">
                    <a href="/MyBlog/public/login" class="btn btn-warning">Login to comment</a>
                </div>
            @endif
        </div>
    </div>
@endsection 





