@php( $item =[])

    <div class="product-area pt-115 pb-120">
        <div class="pl-100 pr-100">
            <div class="container-fluid">
                <div class="section-title text-center mb-60">
                    <h2>New Arrivals</h2>
                </div>


                <div class="tab-pane active show fade">
                    <div class="custom-row">

                        @foreach($product ['items'] as $item)

                                    <div class="custom-col-5 custom-col-style mb-65">
                                        <div class="product-wrapper">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img src="{{ asset('storage') }}/{{ $item->photo }}" alt="">
                                                </a>
                                                <span>hot</span>
                                                <div class="product-action">
                                                    {{csrf_field()}}
                                                        <input type="hidden" name="_method" value="POST">
                                                    <a class="animate-left" title="Like" href="like/{{$item->id}}/store">
                                                        {{csrf_field()}}
                                                        <input type="hidden" name="_method" value="POST">
                                                        <i class="pe-7s-like"></i>
                                                    </a>

                                                    <a class="animate-top" title="Add To Order" href="order/{{$item->id}}/create">

                                                        {{csrf_field()}}
                                                        <input type="hidden" name="_method" value="POST">
                                                        
                                                        <i class="pe-7s-cart"></i>
                                                    </a>
                                                    <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal{{$item->id}}" href="#{{$item->id}}">
                                                        <i class="pe-7s-look"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h4><a href="{{route('product.show',$item->id)}}"> {{$item->name}} </a></h4>
                                                <span>{{$item->price}} Tk</span>
    
                                                
                                            </div>
                                        </div>
                                    </div>
    
                                    @include('inc.modal')
                                @endforeach

                        

                    </div>
                </div>

            </div>
        </div>
    </div>

