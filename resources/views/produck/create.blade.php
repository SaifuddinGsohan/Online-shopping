@extends('layouts.app')

@section('content')

	<h1>Add Produck !</h1>
	
    <form method="POST" action="/produck">

    	{{csrf_field()}}
    	<input type="hidden" name="user_id" value="{{$user->id}}">
    	<input type="text" name="name" placeholder="Produck Name">
    	<input type="text" name="data" placeholder="Produck Information">

    	<input type="submit" name="submit">


    </form>
  
@endsection