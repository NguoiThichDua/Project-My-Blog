 <!-- Scripts -->
 <script src="{{ asset('js/app.js') }}" defer></script>
 <script src="{{ asset('js/zoom.js') }}" defer></script>


 <!-- Fonts -->
 <link rel="dns-prefetch" href="//fonts.gstatic.com">
 <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

 <!-- Styles -->
 <link href="{{ asset('css/app.css') }}" rel="stylesheet">
 <link href="{{ asset('css/customContainerFluid.css') }}" rel="stylesheet">
 <link href="{{ asset('css/customContainer.css') }}" rel="stylesheet">
 <link href="{{ asset('css/customJumbotron.css') }}" rel="stylesheet">
 <link href="{{ asset('css/customScrollbar.css') }}" rel="stylesheet">
 <link href="{{ asset('css/cardProfile.css') }}" rel="stylesheet">
 <link href="{{ asset('css/menuButton.css') }}" rel="stylesheet">
 <link href="{{ asset('css/zoom.css') }}" rel="stylesheet">
 <link href="{{ asset('css/cursor.css') }}" rel="stylesheet">

@foreach ($cc as $c)

<div class="m-3">
	<div class="media alert alert-secondary">
		<img src="/MyBlog/public/storage/cover_images/{{$c->user->image}}" class="mr-3 rounded-lg" alt="..." width="64px" height="64px">
		<div class="media-body">
			<h5 class="mt-0"><b>{{$c->user->name}}</b></h5>
			{!!$c->body!!}
		</div>
	</div>
</div>

@endforeach  


