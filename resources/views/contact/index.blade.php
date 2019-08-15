@extends('layouts.app')

@section('content')
    @if (count($contact) > 0)
        @foreach ($contact as $c)
            <div class="card">
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <h5>{{$c->title}}</h5>
                        <div class="jumbotron">
                            <p>{!!$c->body!!}</p>
                        </div>
                        <div class="row">
                            <div class="col"> 
                                <footer class="blockquote-footer">{{$c->created_at}}</cite></footer>
                                <footer class="blockquote-footer">{{$c->user->name}}</cite></footer> 
                            </div>
                            <div class="col">  
                                {!! Form::open(['action' => ['ContactController@destroy', $c->id], 'method' => 'POST','class' => 'pull-right d-inline']) !!}
                                    {{Form::hidden('_method','DELETE')}}
                                    {{Form::submit('Delete', ['class'=>'btn btn-primary btn-lg btn-block'])}}
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </blockquote>
                </div>
            </div>
        @endforeach
        <div class="d-flex justify-content-end">
            {{-- Phân trang --}}
            {{$contact->links()}}
        </div>
    @else
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Không</strong>  có ý kiến phản hồi từ người dùng
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
       
    @endif
@endsection