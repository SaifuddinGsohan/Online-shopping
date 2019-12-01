@extends('layouts.app')

@section('content')

   
    <form method="post" action="/produck/{{$produck->id}}">

    	{{csrf_field()}}
    	<input type="hidden" name="_method" value="DELETE">

    </form>
  
@endsection