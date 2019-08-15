<?php
        $id_for_news = substr($_SERVER["REQUEST_URI"], 20, 10);
        //echo $id_for_coding;
    ?>

@foreach ($cc as $c)
	<div class="media alert alert-secondary">
		<img src="/MyBlog/public/storage/cover_images/{{$c->user->image}}" class="mr-3 rounded-lg" alt="..." width="64px" height="64px">
		<div class="media-body">
			<h5 class="mt-0"><b>{{$c->user->name}}</b></h5>
			{!!$c->body!!}
		</div>
		<div>
			@if (!Auth::guest())
				@if (Auth::user()->id == $c->user->id)
					{!! Form::open(['action' => ['CommentNewsController@destroy', $c->id], 'method' => 'POST','class' => 'pull-right']) !!}
						{{Form::hidden('_method','DELETE')}}
						{{Form::submit('Delete', ['class'=>'small btn text-danger'])}}
					{!! Form::close() !!} 
				@endif
			@endif
		</div>
	</div>
@endforeach  




