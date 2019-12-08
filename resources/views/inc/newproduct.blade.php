
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
                                                    <img src="assets/img/product/fashion-colorful/1.jpg" alt="">
                                                </a>
                                                <span>hot</span>
                                                <div class="product-action">
                                                    <a method class="animate-left" title="Wishlist" href="{{route('storelike',$item->id)}}">
                                                        <i class="pe-7s-like"></i>
                                                    </a>
                                                    <a media="POST" class="animate-top" title="Add To Cart" href="{{route('order.store',$item->id)}}">
                                                        <i class="pe-7s-cart"></i>
                                                    </a>
                                                    <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                        <i class="pe-7s-look"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h4><a href="{{route('product.show',$item->id)}}"> {{$item->name}} </a></h4>
                                                <span>{{$item->price}} Tk</span>
    
                                                <!-- <form method="POST" action="{{ url('/order') }}">
    
                                                    {{csrf_field()}}
                                                    <input type="hidden" name="produck_id" value="{{$item->id}}">
                                                    <input type="submit" name="Add" value="submit">
    
                                                </form>
                                                 -->
                                            </div>
                                        </div>
                                    </div>
    

                                @endforeach

                        

                    </div>
                </div>

            </div>
        </div>
    </div>

