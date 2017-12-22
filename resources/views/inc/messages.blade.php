@if(count($errors) > 0)
	@foreach($errors->all() as $error)

		<div class="alert alert-danger">

		{{$error}}

		</div>


	@endforeach



@endif

{{-- Si todo bien --}}

@if(session('success'))

<div class="alert alert-success">
	
	{{session('success')}}
</div>

@endif


{{-- Si es error --}}
@if(session('error'))

<div class="alert alert-danger">
	{{session('error')}}
</div>

@endif