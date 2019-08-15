<div class="col-md-4">
    <div class="card border border-secondary" >
        <div class="card-body">
            <h5><em class="">Instroduce:</em> </h5>
            <div class="alert alert-success text-center">
                <span class="card-title "><strong>{{$user->info}}</strong></span>
            </div>
            <hr>
            <p class="card-text">
            <h5><em class="">Info account:</em>  </h5>
            <div class="jumbotron text-center">
                <span>Email: {{$user->email}}</span><br>
                <span>Created: {{$user->created_at}}</span> 
                <span>Created: {{$user->updated_at}}</span><br>
                <hr>
                @if ($user->type == null || $user->type = 0)
                <span>Type: <b>Guest</b> </span><br>
                @else
                <span>Type: <b style="color: red">Admin</b> </span><br>
                @endif    
            </div>
            </p>
        </div>
    </div>
    <div class="card w-100 mt-3 border border-secondary" id="cardMoreProfile">
        <figure class="front d-flex justify-content-center align-items-center text-center">
            <div class="card-body">
                <h3 class="">Settings Your Profile</h3>
                <img src="{{asset('img/setting.png')}}" alt="" width="50px" height="50px">
            </div>
        </figure>
        <figure class="back d-flex justify-content-center align-items-center text-center">
            <div class="card-body">
                <a href="/MyBlog/public/profile/{{$user->id}}/edit" class="btn btn-success btn-lg w-50">Edit Profile</a><br>
                <hr>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-danger btn-lg w-50" data-toggle="modal" data-target="#exampleModalCenter">
                Delete
                </button>
            </div>
        </figure>
    </div>
    @if (auth()->user()->type == 1)
        <div class="card bg-light mt-3 border border-secondary" style="max-width: 18rem;">
            <div class="card-header">
                <h5><em class="">Manager</em>  </h5>
            </div>
            <div class="card-body">
                <h5 class="card-title">Contact</h5>
                <a href="/MyBlog/public/contact" class="btn btn-primary btn-lg btn-block">Go to Contact</a>
            </div>
        </div>
    @endif
    
</div>