@extends('home')

@section('OrderBox')

   
    <form method="" action="">

    	@foreach($products as $product)

    		<li><a href="{{route('product.show',$product->id)}}">{{$product->name}}</a></li>

    		<form method="post" action="/order/{{$product->id}}">

    			{{csrf_field()}}
    			<input type="hidden" name="_method" value="DELETE">

    			<input type="submit" name="submit" value="Delete">

    		</form>

    	@endforeach
    	

    
    </form>
  
@endsection