@extends('layouts.app')

@section('content')

	<h1>Add Product !</h1>
	
    <form method="POST" action="/product">

    	{{csrf_field()}}
    	<input type="hidden" name="user_id" value="{{$user->id}}">
    	<input type="text" name="name" placeholder="Product Name">
    	<input type="text" name="data" placeholder="Product Information">

    	<input type="submit" name="submit">


    </form>
  
@endsection