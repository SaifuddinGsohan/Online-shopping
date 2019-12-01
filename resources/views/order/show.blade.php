@extends('layouts.app')

@section('content')

	<a href="/"> Back</a>

    <h1>{{$order->name}}</h1>
    
    <!--

    <a href="{{route('order.edit',$order->id)}}">Edit</a>
    
     Delete 
     
		-->
    <form method="post" action="/order/{{$order->id}}">
    	{{csrf_field()}}
    	<input type="hidden" name="_method" value="DELETE">

    	<input type="submit" name="submit" value="Delete">
    </form>

     
  
@endsection
