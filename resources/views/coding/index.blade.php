@extends('layouts.app')

@section('content')
    @if (!Auth::guest())
        @if (auth()->user()->type == 1)
            <a href="/MyBlog/public/coding/create" class="btn btn-danger mb-3 col-md-4">Create Post</a>
        @endif
    @endif

    @if (count($code) > 0)
        @foreach ($code as $c)
            <div class="mb-5">
                <div class="card mb-3 border border-secondary">
                    <img src="/MyBlog/public/storage/images_post_coding/background/{{$c->image_1}}" class="card-img-top" alt="Không có ảnh" height="500px">
                </div>
                <div class="d-flex justify-content-center">
                    <div class="card p-5 bg-light text-center shadow p-3 rounded" style="margin-top: -200px; width: 80%;">
                        <h1 class="mt-3" style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">{{$c->title}}</h1>
                        <p class="card-text">{!!$c->introduce!!}</p>
                        <div class="row">
                            <div class="col"><a href="/MyBlog/public/coding/{{$c->id}}" class="btn btn-danger">Đọc tiếp</a></div>
                            <div class="col d-flex align-items-end justify-content-end"><p class="card-text"><small class="text-muted">Last updated {{$c->updated_at}}</small></p></div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
        @endforeach
        
        <div class="d-flex justify-content-end">
            {{-- Phân trang --}}
            {{$code->links()}}
        </div>
    @else
        Không có bài đăng
    @endif 
@endsection