@extends('layouts.app')

@section('content')


    <ul>
    	
    	@foreach($products as $product)

    		<li><a href="{{route('product.show',$product->id)}}">{{$product->name}}</a></li>


    	@endforeach

    	<form action="/product/create">
    		
    		<input type="submit" name="AddP" 	value="Add Product">
    	</form>


    </ul>
  
@endsection