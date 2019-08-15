@extends('layouts.app')

@section('content')
   @if(!Auth::guest())         <!--Kiểm tra đăng nhập chưa-->
      <div class="bg-secondary rounded">
         <div class="row">
            <div class="col-md-12 w-100">
               <h1 class="mt-3 text-center text-light" style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">Edit Your Profile</h1>
               <div class="jumbotron d-flex justify-content-center align-items-center m-4">
                  <div class="row">
                     <div class="col d-flex justify-content-center mt-4">
                        <div class="card">
                           <div class="card-head" style="position: relative; height: 48px">
                              <img style="margin: 0 auto;" src="/MyBlog/public/storage/cover_images/{{$profile->image}}" class="d-block rounded-circle shadow-sm p-1 mb-1 bg-white rounded" width="130px" height="130px">
                           </div>
                           <div class="card-body">
                              <img src="/MyBlog/public/storage/background_image/{{$profile->background_image}}" class="d-block rounded-sm shadow p-2 mb-2 bg-white rounded" width="350px" height="250px">       
                              <div class="col d-flex justify-content-center align-items-center" >
                                 <a href="/MyBlog/public/profile" class="btn btn-secondary">Go Back Profile</a><br>
                              </div>
                              <hr>
                              <div class="col d-flex justify-content-center align-items-center" >
                                 <div data-toggle="modal" data-target="#exampleModalCenter" class="btn btn-outline-danger">
                                    <img alt="No Image" src="{{asset('img/icondelete.png')}}"/>  
                                    <h2 class="">Delete Account</h2>
                                    <br>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col">
                        {!! Form::open(['action' => ['ProfileController@update', $profile->id], 'method' => 'POST','enctype' => 'multipart/form-data']) !!}
                        <form>
                           <div class="form-group">
                              {{Form::label('name', 'Your Name:')}}
                              {{Form::text('name', $profile->name, ['class' => 'form-control', 'placeholder' => 'Name'])}}
                           </div>
                           <div class="form-group">
                              {{Form::label('email', 'Email:')}}
                              {{Form::text('email', $profile->email, ['class' => 'form-control', 'placeholder'  => 'Email'])}}
                           </div>
                           <div class="form-group">
                              {{Form::label('cover_name', 'Cover Name:')}}
                              {{Form::text('cover_name', $profile->cover_name, ['class' => 'form-control', 'placeholder' => 'Cover name'])}}
                           </div>
                           <div class="form-group">
                              {{Form::label('info', 'Info:')}}
                              {{Form::textarea('info', $profile->info, ['class' => 'form-control', 'placeholder' => 'Info'])}}
                           </div>
                           <div class="form-group">
                              {{Form::label('cover_image', 'Avatar:')}}
                              {{Form::file('cover_image', ['class'=>'form-control'])}}
                           </div>
                           <div class="form-group">
                              {{Form::label('background_image', 'BackGround:')}}
                              {{Form::file('background_image', ['class'=>'form-control'])}}
                           </div>
                           <br>
                           {{Form::hidden('_method','PUT')}}
                           {{Form::submit('Confirm', ['class'=>'btn btn-success w-100'])}}
                        </form>
                        {!! Form::close() !!}
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   @endif    

   <!-- Modal -->
   <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalCenterTitle">Notification</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">
               You want to delete this account "{{$profile->name}}"
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
               {!! Form::open(['action' => ['ProfileController@destroy', $profile->id], 'method' => 'POST','class' => 'pull-right d-inline']) !!}
                  {{Form::hidden('_method','DELETE')}}
                  {{Form::submit('Delete', ['class'=>'btn btn-danger'])}}
               {!! Form::close() !!}
            </div>
         </div>
      </div>
   </div>
@endsection