<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
<!-- Fonts -->
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="{{ asset('css/customScrollbar.css') }}" rel="stylesheet">
<link href="{{ asset('css/menuButton.css') }}" rel="stylesheet">

<div class="container-fluid">
   <div class="row justify-content-center">
      <div class="col">
         <div class="card mt-3 w-100">
            <div class="card-body">
               @if (session('status'))
                  <div class="alert alert-success" role="alert">
                     {{ session('status') }}
                  </div>
               @endif
               
               <h3>Your Blog Posts</h3>
              
               @if (count($forum) > 0)
                  <table class="table table-striped table-secondary">
                     <thead>
                        {{-- 
                        <tr>
                           <th scope="col">Title</th>
                           <th scope="col"></th>
                           <th scope="col"></th>
                        </tr>
                        --}}
                     </thead>
                     <tbody>
                        @foreach ($forum as $p)
                           <tr>
                              <th scope="row"><img src="/MyBlog/public/storage/cover_images_post/{{$p->image}}" alt="" width="150px" height="95px"></th>
                              <td>{{$p->title}}</td>
                              <td><a target="_top" href="/MyBlog/public/forum/{{$p->id}}" class="btn btn-primary">Go</a></td>
                           </tr>
                        @endforeach   
                     </tbody>
                  </table>
               @else
                  <p>You have no post</p>
               @endif
            </div>
         </div>
      </div>
   </div>
   <hr>
   <div class="row">
      <div class="col">
         <div class="d-flex justify-content-end">
            {{-- Phân trang --}}
            {{$forum->links()}}
         </div>
      </div>
   </div>
</div>