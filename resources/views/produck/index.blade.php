@extends('layouts.app')

@section('content')


    <ul>
    	
    	@foreach($producks as $produck)

    		<li><a href="{{route('produck.show',$produck->id)}}">{{$produck->name}}</a></li>


    	@endforeach

    	<form action="/produck/create">
    		
    		<input type="submit" name="AddP" 	value="Add Produck">
    	</form>


    </ul>
  
@endsection