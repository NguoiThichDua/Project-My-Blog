@extends('layouts.app')

@section('content')
<div class="card">
    @if (count($comment_forum) > 0)
        <h1 class="mt-3" style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">Reponse</h1>
        @foreach ($comment_forum as $c)
            <div class="media mt-3">
                @if (auth()->user()->id == $c->user_id)
                    <img src="/MyBlog/public/storage/cover_images/{{auth()->user()->image}}" class="mr-3 rounded-circle" alt="..." width="50px" height="50px">
                @else
                    <img src="/MyBlog/public/storage/cover_images/noImage.png" class="mr-3 rounded-circle" alt="..." width="50px" height="50px">
                @endif
                <div class="media-body">
                    <h5 class="mt-3">
                        @if (auth()->user()->id == $c->user_id)
                            {{auth()->user()->name}}
                        @else
                            Người Dùng Khác Với ID {{$c->user_id}}
                        @endif
                    </h5>
                    
                    {!!$c->body!!}
                </div>
            </div>
            <hr>
        @endforeach
    @endif
</div>
@endsection
