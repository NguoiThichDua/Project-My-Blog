@extends('layouts.app')

@section('content')
    <?php
        $id_for_news = substr($_SERVER["REQUEST_URI"], 20, 10);
        //echo $id_for_coding;
    ?>

            <div class="card p-3">
                <h1 class="mt-3 text-center" style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">{{$new->title}}</h1> 
            </div>

            <div class="card mt-3 p-5">
                <p class="">{!!$new->introduce!!}</p>
                <img src="/MyBlog/public/storage/images_post_news/images/{{$new->image_2}}" alt="Không có ảnh" width="100%" height="100%" class="rounded-lg"> 
                <p class="card-text">{!!$new->body!!}</p>
                <img src="/MyBlog/public/storage/images_post_news/images/{{$new->image_3}}" alt="Không có ảnh" width="100%" height="100%" class="rounded-lg">
                <div class="row">
                    <div class="col-md-6" > <a href="/MyBlog/public/news" class="btn btn-primary mt-3">Go back</a></div>
                    <div class="col d-flex justify-content-end" >
                        @if (!Auth::guest())
                            @if (auth()->user()->type == 1)
                                <a href="/MyBlog/public/news/{{$new->id}}/edit" class="btn btn-warning mt-3">Edit</a>

                                {!! Form::open(['action' => ['NewsController@destroy', $new->id], 'method' => 'POST','class' => 'pull-right d-inline']) !!}
                                    {{Form::hidden('_method','DELETE')}}
                                    {{Form::submit('Delete', ['class'=>'btn btn-danger mt-3'])}}
                                {!! Form::close() !!} 
                            @endif
                        @endif
                    </div>
                </div>
        </div>   
        <div class="card mt-3 p-3">
            {!! Form::open(['method' => 'POST', 'action' => 'CommentNewsController@store']) !!}
            <div class="form-group">
                <h1 class="mt-3" style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">Comment</h1>                                                       
                {{Form::textarea('body', '', ['class' => 'form-control ckeditor', 'placeholder' => 'Body'])}}    <!--Cái đầu là name - Cái sau là giá trị-->
                {{Form::text('new_id',$id_for_news, ['class' => 'form-control ckeditor d-none', 'placeholder' => ''])}}   
                </div>
                {{Form::submit('Comment', ['class'=>'btn btn-success'])}}
            {!! Form::close() !!}
        </div>  
        @if (count($cc) > 0)
            <div class="card mt-3 p-3">    
                @include('commentnews.show')

                <div class="d-flex justify-content-end">
                    {{-- Phân trang --}}
                    {{$cc->links()}}
                </div>
             </div>  
        @else
            <div class="alert alert-primary mt-3" role="alert">
              Chưa có bình luận cho bài viết này
              </div>
        @endif
                  
@endsection

