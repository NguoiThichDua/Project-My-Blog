@extends('layouts.app')

@section('content')
<div id="app">
    @if(!Auth::guest())                                  {{--Kiểm tra đã đăng nhập chưa--}}
        @if(count($users) > 0)                           {{--Kiểm tra có tài khoản nào tồn tại hay không--}}      
            {{-- foreach --}}
            @foreach ($users as $user)
                {{-- header --}}
                <div class="alert rounded-lg" role="alert" style="background-image: url('/MyBlog/public/storage/background_image/{{$user->background_image}}'); background-size: cover;background-repeat: no-repeat; height: 500px;">
                    <div class="col-md-4">
                        <div class="text-center mt-3">
                            <img src="/MyBlog/public/storage/cover_images/{{$user->image}}" class="rounded-circle shadow-sm p-1 bg-white rounded mt-5" width="200px" height="200px">
                            <div class="text-light text-center">
                                <strong><span style="font-size: 30px; text-shadow: 2px 2px black;">{{$user->name}}</span></strong><br>
                                <span style="font-size: 21px">({{$user->cover_name}})</span>
                            </div>
                        </div>
                    </div>
                </div>
               
                <div class="row rounded">
                   
                    @include('ProfileComponents.left')
                
                   
                    <div class="col-md-8">
                        
                        @include('ProfileComponents.forum')

                        {{-- <iframe src="/MyBlog/public/home" width="100%" height="100%" class="rounded-lg" >
                            <p>Your browser does not support iframes.</p>
                        </iframe> --}}

                        @if (auth()->user()->type == 1)

                            @include('ProfileComponents.coding')
                            @include('ProfileComponents.news')
                                
                        @endif
                    </div>       {{-- end right --}}
                </div>      

               

            @endforeach     {{--end foreach --}}
        @else
            Lỗi... Không tìm thấy tài khoản tồn tại...!
        @endif
    @endif

   @include('ProfileComponents.modal')

</div>
   
@endsection