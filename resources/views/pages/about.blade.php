@extends('layouts.app')

@section('content')
    <div class="accordion" id="accordionExample">
        <div class="card jumbotron rounded">
            <div class="row" style="height: auto;">
                <div class="col-4">
                    @include('AboutComponents.leftAbout')
                </div>
                <div class="col-8" style="height:100%; width: 100%;overflow: auto">
                    @include('AboutComponents.rightAbout')
                </div>
            </div>
        </div>
    </div>
@endsection




        
        
   