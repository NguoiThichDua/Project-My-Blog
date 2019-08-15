@extends('layouts.app')

@section('content')
<div class="card p-5">
    
    @if (!Auth::guest())
        @if (auth()->user()->type == 1)
        <h1>Edit Post</h1>
            {!! Form::open(['action' => ['CodingController@update', $code->id], 'method' => 'POST','enctype' => 'multipart/form-data']) !!}
                    <div class="form-group">
                        {{Form::label('title', 'Title')}}                                                          
                        {{Form::text('title',$code->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}    <!--Cái đầu là name - Cái sau là giá trị-->
                    </div>
                    <div class="form-group">
                        {{Form::label('introduce', 'Introduce')}}                                                          
                        {{Form::textarea('introduce', $code->introduce, ['class' => 'form-control ckeditor', 'placeholder' => 'Introduce'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('body', 'Body')}}
                        {{Form::textarea('body', $code->body, ['class' => 'form-control ckeditor', 'placeholder' => 'Body'])}}
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                {{Form::label('title', 'Background')}}     
                                {{Form::file('image_1', ['class' => 'form-control'])}}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <img src="/MyBlog/public/storage/images_post_coding/background/{{$code->image_1}}" alt="" width="100%">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                {{Form::label('title', 'Image 1')}}     
                                {{Form::file('image_2', ['class' => 'form-control'])}}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <img src="/MyBlog/public/storage/images_post_coding/images/{{$code->image_2}}" alt="" width="100%">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                {{Form::label('title', 'Image 2')}}     
                                {{Form::file('image_3', ['class' => 'form-control'])}}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <img src="/MyBlog/public/storage/images_post_coding/images/{{$code->image_3}}" alt="" width="100%">
                        </div>
                    </div>
                {{Form::hidden('_method','PUT')}}
                {{Form::submit('Confirm', ['class'=>'btn btn-success'])}}
            {!! Form::close() !!}
            @else
                Bạn không có quyền cho tác vụ này
            @endif
        @else
            Bạn không có quyền cho tác vụ này
    @endif
</div>
@endsection