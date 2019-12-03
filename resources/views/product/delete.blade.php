@extends('layouts.app')

@section('content')

   
    <form method="post" action="/product/{{$product->id}}">

    	{{csrf_field()}}
    	<input type="hidden" name="_method" value="DELETE">

    </form>
  
@endsection