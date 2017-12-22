
@extends('layout.app')

@section('content')

<a href="/posts" class="btn btn-default">Ver Posts Anteriores!</a>

<h1> {{$post->title}} </h1>

<img style="width: 100%" src="/storage/cover_images/{{$post->cover_image}}" alt="">

<br><br>


<div>
	{!!$post->body!!}
</div>

<hr>

<small>Escrito  {{ $post->created_at}} por <strong>	{{$post->user->name}} </strong> </small>

<br>	<br>	

<hr>	


<div class="container">	

<iframe src="https://www.facebook.com/plugins/share_button.php?href=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&layout=button&size=small&mobile_iframe=true&appId=135226696164&width=84&height=20" width="84" height="20" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>

</div>

<hr>

@if(!Auth::guest())

@if(Auth::user()->id == $post->user_id)

<a href="/posts/{{$post->id}}/edit" class="btn btn-default"> Editar</a>

{!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
{{Form::hidden('_method', 'DELETE')}}
{{Form::submit('Delete',['class' => 'btn btn-danger'])}}

{!!Form::close()!!}
@endif
@endif

@endsection