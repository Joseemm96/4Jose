@extends('layout.app')


@section('content')


{{-- Jumbotron porque no tengo creatividad --}}

<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-3" id="jumbotron">Contáctanos</h1>
    
  </div>
</div>




{{-- Haciendo el formulario --}}

<div class="container">
	<div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="well well-sm">
        @if (Session::has('flash_message'))
        <div class="alert alert-success"> {{Session::get('flash_message')}}</div>
        @endif
          <form class="form-horizontal" action="{{ route('contact.store')}}" method="POST">
          {{ csrf_field() }}
          <fieldset>
         
    
            <!-- Name input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="name">Nombre</label>
              <div class="col-md-9">
                <input id="name" name="name" type="text" placeholder="Your name" class="form-control">
                @if ($errors->has('name'))
                <small class="form-text invalid-feedback"> {{$errors->first('name')}}</small>
                @endif
              </div>
            </div> 


            <!-- Email input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="email">Correo</label>
              <div class="col-md-9">
                <input id="email" name="email" type="text" placeholder="Your email" class="form-control">
                                @if ($errors->has('email'))
                <small class="form-text invalid-feedback"> {{$errors->first('email')}}</small>
                @endif
              </div>
            </div>
    
            <!-- Message body -->
            <div class="form-group">
              <label class="col-md-3 control-label" for="message">Tu mensaje!</label>
              <div class="col-md-9">
                <textarea class="form-control" id="message" name="msg" placeholder="Please enter your message here..." rows="5"></textarea>
                                @if ($errors->has('msg'))
                <small class="form-text invalid-feedback"> {{$errors->first('msg')}}</small>
                @endif
              </div>
            </div>
    
            <!-- Form actions -->
            <div class="form-group">
              <div class="col-md-12 text-right">
                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
              </div>
            </div>
          </fieldset>
          </form>
        </div>
      </div>
	</div>
</div>



@endsection 