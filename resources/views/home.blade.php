@extends('layouts.app')

@section('content')
<div class="container">
    <a href="{{route('order.index')}}">
                                <h6> Order list </h6>
                            </a>
    <div class="row justify-content-center">
        
        <div class="col-md-8">
            
            <div class="card">

                @foreach($items as $item)

                    <form action="">
            
                        
                        <div class="card-header">
                            
                            <a href="{{route('produck.show',$item->id)}}">
                                <h3> {{$item->name}} </h3>
                            </a>

                            <form method="POST" action="{{ url('/order') }}">

                                {{csrf_field()}}
                                <input type="hidden" name="produck_id" value="{{$item->id}}">
                                <input type="submit" name="Add" value="submit">

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
