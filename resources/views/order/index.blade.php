@extends('layouts.app')

@section('content')

	<ul>
    	
    	@foreach($lists as $list)

    		<li><a href="{{route('produck.show',$list->id)}}">{{$list->name}}</a></li>

    	@endforeach

    	<form action="/order/create">
    		
    		 <input type="submit" name="Addo" 	value="Add Orede">
    	</form>


    </ul>



@endsection