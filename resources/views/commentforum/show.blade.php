@extends('layouts.app')

@section('commentForum')

    <?php
        $id_for_forum = substr($_SERVER["REQUEST_URI"], -2);
    ?>
    
    @if (count($comments) > 0)
        <div class="container rounded-lg card p-3">
            @foreach ($comments as $c)
                <h1 class="mt-3" style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif"> {{$c->forum->title}}</h1>
                <p class="" style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif"> {!!$c->forum->body!!}</p>
                <img class="rounded-lg" width="100%" height="500px" alt="No Image" src="/MyBlog/public/storage/cover_images_post/{{$c->forum->image}}"/>
                @break
            @endforeach    
        </div>
    @endif
    <div class="container rounded-lg card mt-3 p-3">
        {!! Form::open(['method' => 'POST', 'action' => 'CommentForumController@store']) !!}
            <div class="form-group">
                <h3 style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">Comment</h3>                                                       
                {{Form::textarea('body', '', ['class' => 'form-control ckeditor', 'placeholder' => 'Body'])}}    <!--Cái đầu là name - Cái sau là giá trị-->
                <input type="text" value="<?php echo $id_for_forum;?>" name="forum_id" style="display: none">
            </div>
            {{Form::submit('Comment', ['class'=>'btn btn-success'])}}
        {!! Form::close() !!}
    </div>
    <div class="container rounded-lg card mt-3 p-3">
        @if (count($comments) > 0)
            @foreach ($comments as $c)
                <div class="media alert alert-secondary ">
                    <img src="/MyBlog/public/storage/cover_images/{{$c->user->image}}" class="mr-3 rounded-lg" alt="..." width="64px" height="64px">
                    <div class="media-body">
                        <h5 class="mt-0"><b>{{$c->user->name}}</b></h5>
                        {!!$c->body!!}
                    </div>
                </div>
            @endforeach
            <div class="d-flex justify-content-end">
                {{-- Phân trang --}}
                {{$comments->links()}}
            </div>
        @else
        <div class="alert alert-primary mt-3" role="alert">
                Chưa có bình luận cho bài viết này
                </div>
        @endif
    </div>
    </div>
@endsection
