@extends('emails.email_layout')

@section('content')
  
  <h3>Hey there!</h3>

  <p>Someone has requested an invitation to try out Coldreader.</p>

  <p>Name: {!! $name !!}</p>
  <p>Email: {!! $email !!}</p>
  <p>Additional Info: {!! $additional_info !!}</p>

  <p>Go ahead and get on that!  And enjoy the rest of your day! </p>

@endsection