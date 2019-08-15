@extends('layouts.app')

@section('content')
    <div class="jumbotron p-5">
        <h1>Edit Post</h1>
        {!! Form::open(['action' => ['ForumController@update', $forum->id], 'method' => 'POST','enctype' => 'multipart/form-data', 'class'=>'d-inline']) !!}
            <form>
                <div class="form-group">
                    {{Form::label('title', 'Title')}}
                    {{Form::text('title', $forum->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
                </div>
                <div class="form-group">
                    {{Form::label('body', 'Body')}}
                    {{Form::textarea('body', $forum->body, ['class' => 'form-control ckeditor', 'placeholder' => 'Body'])}}
                </div>
                <div class="form-group">
                    {{Form::label('cover_image', 'Image')}}
                    {{Form::file('cover_image', ['class' => 'form-control'])}}
                </div>
                {{Form::hidden('_method','PUT')}}
                {{Form::submit('Submit', ['class'=>'btn btn-success'])}}
            </form> 
        {!! Form::close() !!}
        <a href="/MyBlog/public/forum/{{$forum->id}}" class="btn btn-warning">Go back</a>
    </div>
@endsection