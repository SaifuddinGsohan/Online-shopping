@extends('layouts.app')

@section('content')

	<h1>Edit Product !</h1>
	
    <form method="post" action="/product/{{$product->id}}">

    	{{csrf_field()}}
    	<input type="hidden" name="_method" value="PUT">
    	
    	<input type="text" name="name" placeholder="product Name" value="{{$product->name}}">

    	<input type="submit" name="submit" value="Update">

    </form>

   
  
@endsection