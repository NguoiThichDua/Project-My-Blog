@extends('layouts.app')

@section('content')
<?php
   $id_for_coding = substr($_SERVER["REQUEST_URI"], 22, 10);
?>


    <div class="card p-3">
        <h1 class="mt-3 text-center" style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">{{$code->title}}</h1> 
    </div>

    <div class="card p-5 mt-3">
        <p class="card-title">{!!$code->introduce!!}</p>
        <img src="/MyBlog/public/storage/images_post_coding/images/{{$code->image_2}}" alt="Không có ảnh" width="100%" height="100%" class="rounded-lg"> 
        <p class="card-text">{!!$code->body!!}</p>
        <img src="/MyBlog/public/storage/images_post_coding/images/{{$code->image_3}}" alt="Không có ảnh" width="100%" height="100%" class="rounded-lg">
        <div class="row">
            <div class="col-md-6" > <a href="/MyBlog/public/coding" class="btn btn-primary mt-3">Go back</a></div>
            <div class="col d-flex justify-content-end" >
                @if (!Auth::guest())
                    @if (auth()->user()->type == 1)
                        <a href="/MyBlog/public/coding/{{$code->id}}/edit" class="btn btn-warning mt-3">Edit</a>
                        {!! Form::open(['action' => ['CodingController@destroy', $code->id], 'method' => 'POST','class' => 'pull-right d-inline']) !!}
                            {{Form::hidden('_method','DELETE')}}
                            {{Form::submit('Delete', ['class'=>'btn btn-danger mt-3'])}}
                        {!! Form::close() !!} 
                    @endif
                @endif
            </div>
        </div>
    </div>

    <div class="card p-3 mt-3">
        {!! Form::open(['method' => 'POST', 'action' => 'CommentCodingController@store']) !!}
            <div class="form-group">
                <h1 class="mt-3" style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">Comment</h1>                                                       
                {{Form::textarea('body', '', ['class' => 'form-control ckeditor', 'placeholder' => 'Body'])}}    <!--Cái đầu là name - Cái sau là giá trị-->
                {{Form::text('coding_id',$id_for_coding, ['class' => 'form-control ckeditor d-none', 'placeholder' => ''])}}   
            </div>
            {{Form::submit('Comment', ['class'=>'btn btn-success'])}}
        {!! Form::close() !!}
        <hr>
    </div>

    <div class="card p-3 mt-3">
        <iframe src="/MyBlog/public/comment/coding/{{$id_for_coding}}" width="100%" height="500px" class="rounded-lg" >
            <p>Your browser does not support iframes.</p>
        </iframe>

        @yield('commentcoding')

    </div>
    <div class="card-footer text-muted">
        {{$code->created_at}}
    </div>
@endsection

