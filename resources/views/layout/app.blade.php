<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>{{config('app.name', '4Jose')}}</title>
	<link rel="stylesheet" href="{{asset('css/app.css')}}">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="{{asset('css/style.css')}}">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<style>
		
		.invalid-feedback {
			display:block;
		}
	</style>

</head>
<body>



<div id="app">

@include('inc.navbar')

<div class="container">
		@include('inc.messages')


	@yield('content')

	</div>

	</div>

{{-- Aquí va el footer --}}

    <div class="footer">
      <div class="container" id="otrocontainer">
              <a href='#' target="_blank"><i class="fa fa-twitch fa-3x fa-fw"></i></a>
              <a href='https://www.facebook.com/jmavarezmendez' target="_blank"><i class="fa fa-facebook fa-3x fa-fw"></i></a>
              <a href='https://twitter.com/MavarezMz' target="_blank"><i class="fa fa-twitter fa-3x fa-fw"></i></a>
              <a href='https://www.youtube.com/channel/UCB5_6zncE5lpDHALx5BlO5g?view_as=subscriber' target="_blank"><i class="fa fa-youtube-play fa-3x fa-fw"></i></a>
              
            </span>

            <p style="color: #fff">Realizado Por Jose Mavarez &copy; en 4geeks</p>
      </div>
    </div>

	{{-- Editor para los posts --}}
	<script src="{{ asset('js/app.js') }}"></script>

	    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>
    
</body>
</html>