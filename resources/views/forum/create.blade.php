@extends('layouts.app')

@section('content')
    <h1>Create Post</h1>
    {!! Form::open(['method' => 'POST', 'action' => 'ForumController@store', 'enctype' => 'multipart/form-data']) !!}
        <form>
            <div class="form-group">
                {{Form::label('title', 'Title')}}                                                          
                {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}    <!--Cái đầu là name - Cái sau là giá trị-->
            </div>

            <div class="form-group">
                {{Form::label('body', 'Body')}}
                {{Form::textarea('body', '', ['class' => 'form-control ckeditor', 'placeholder' => 'Body'])}}
            </div>
             <div class="form-group">
                {{Form::file('cover_image', ['class' => 'form-control'])}}
            </div>
             {{Form::submit('Submit', ['class'=>'btn btn-success'])}}
        </form> 
    {!! Form::close() !!}
@endsection