@extends('layouts.app')

@section('content')

	<a href="/produck"> Back</a>

    <h1>{{$produck->name}}</h1>

    <a href="{{route('produck.edit',$produck->id)}}">Edit</a>
    

    <!-- Delete 

    	

		-->
    <form method="post" action="/produck/{{$produck->id}}">
    	{{csrf_field()}}
    	<input type="hidden" name="_method" value="DELETE">

    	<input type="submit" name="submit" value="Delete">
    </form>

     
  
@endsection
