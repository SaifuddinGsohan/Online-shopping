@extends('home')

@section('OrderBox')

   
    <form method="" action="">

    	@foreach($producks as $produck)

    		<li><a href="{{route('produck.show',$produck->id)}}">{{$produck->name}}</a></li>

    		<form method="post" action="/order/{{$produck->id}}">

    			{{csrf_field()}}
    			<input type="hidden" name="_method" value="DELETE">

    			<input type="submit" name="submit" value="Delete">

    		</form>

    	@endforeach
    	

    
    </form>
  
@endsection