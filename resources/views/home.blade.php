@extends('layouts.app')

@section('content')
<div class="container">
    add
    <div class="row justify-content-center">
        
        <div class="col-md-8">
            
            <div class="card">

                @foreach($items as $item)

                    <form action="">
            
                        
                        <div class="card-header">
                            
                            <a href="{{route('produck.show',$item->id)}}">
                                <h3> {{$item->name}} </h3>
                            </a>

                            <form method="POST" action="/order">

                                {{csrf_field()}}
                                <input type="hidden" name="produck_id" value="{{$item->id}}">
                                <input type="text" name="number of item" value="1">
                                <input type="submit" name="Add">

                            </form>

                        </div>

                        <div class="card-body">
                        <!--
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            -->
                            {{$item->data}}
                        
                        </div>

                    </form>    

                @endforeach
                
            </div>
        </div>

        <form action="">

             @yield('OrderBox') 
            
        </form>


    </div>
</div>
@endsection
