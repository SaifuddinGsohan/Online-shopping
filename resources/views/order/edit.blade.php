@extends('layouts.app')

@section('content')

	<h1>Edit Produck !</h1>
	
    <form method="post" action="/produck/{{$produck->id}}">

    	{{csrf_field()}}
    	<input type="hidden" name="_method" value="PUT">
    	
    	<input type="text" name="name" placeholder="produck Name" value="{{$produck->name}}">

    	<input type="submit" name="submit" value="Update">

    </form>

   
  
@endsection