@extends('layout.app')

@section('content')

<h1>Crear Post</h1>

{!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data' ]) !!}
  	<div class="form-group">
  		{{Form::label('title','Title')}}
  		{{Form::text('title','',['class'=> 'form-control', 'placeholder' => 'Título'])}}
  	</div>
  	<div class="form-group">
  		{{Form::label('body','Body')}}
  		{{Form::textarea('body','',['id' => 'article-ckeditor', 'class'=> 'form-control', 'placeholder' => 'Contenido'])}}
  	</div>

		<div class="form-group">	
		{{Form::file('cover_image')}}
		</div>

  	{{Form::submit('Enviar',['class' => 'btn btn-primary' ])}}    
{!! Form::close() !!}

@endsection