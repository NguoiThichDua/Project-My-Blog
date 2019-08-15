@extends('layouts.app')

@section('content')
    @if (!Auth::guest())
        @if (auth()->user()->type == 1)
        <div class="card p-5">
                <h1>Create Post</h1>
            {!! Form::open(['method' => 'POST', 'action' => 'NewsController@store', 'enctype' => 'multipart/form-data']) !!}
                <form>
                    <div class="form-group">
                        {{Form::label('title', 'Title')}}                                                          
                        {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}    <!--Cái đầu là name - Cái sau là giá trị-->
                    </div>
                    <div class="form-group">
                        {{Form::label('introduce', 'Introduce')}}                                                          
                        {{Form::textarea('introduce', '', ['class' => 'form-control ckeditor', 'placeholder' => 'Introduce'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('body', 'Body')}}
                        {{Form::textarea('body', '', ['class' => 'form-control ckeditor', 'placeholder' => 'Body'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('title', 'Background')}}     
                        {{Form::file('image_1', ['class' => 'form-control'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('title', 'Image 1')}}     
                        {{Form::file('image_2', ['class' => 'form-control'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('title', 'Image 2')}}     
                        {{Form::file('image_3', ['class' => 'form-control'])}}
                    </div>
                    {{Form::submit('Create', ['class'=>'btn btn-success'])}}
                </form> 
            {!! Form::close() !!}
        </div>
            @else
            Bạn không có quyền cho tác vụ này
        @endif
        @else
        Bạn không có quyền cho tác vụ này
    @endif
@endsection