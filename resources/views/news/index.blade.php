@extends('layouts.app')

@section('content')

    @if(!Auth::guest())         <!--Kiểm tra coi m đăng nhập chưa-->
        @if (auth()->user()->type == 1)
            <a href="/MyBlog/public/news/create" class="col-md-4 btn btn-primary">Create Post</a>
        @endif
    @endif

    @if (count($news) > 0)
        <div class="row">
            @foreach ($news as $new)
                <div class="col-md-4 mt-3">
                    <div class="card" style="width: 18rem;">
                        <img src="/MyBlog/public/storage/images_post_news/background/{{$new->image_1}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$new->title}}</h5>
                            <p class="card-text">{!!$new->introduce!!}</p>
                            <p class="card-text"><small class="text-muted">{{$new->created_at}}</small></p>
                            <a href="/MyBlog/public/news/{{$new->id}}" class="btn btn-primary">Đọc tiếp</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        Không có bài đăng
    @endif
@endsection