


    



                    <div class="header-cart cart-res">
                        @php( $T = 0)
                        <a class="icon-cart" href="/order">
                            <i class="ti-shopping-cart">{{$T}}</i>

                            <span class="shop-count pink"> </span>

                        </a>

                        <ul class="cart-dropdown">
                            @php( $Tprice = 0)
                            
                            @foreach($product ['lists'] as $item)

                            <li class="single-product-cart">
                                <div class="cart-img">
                                    <a href="#"><img src="assets/img/cart/1.jpg" alt=""></a>
                                </div>
                                <div class="cart-title">
                                    <h5><a href="{{route('product.show',$item->id)}}"> {{ $item->name }} </a></h5>
                                    <!-- <h6><a href="#">Black</a></h6> -->
                                    <span>{{ $item->price }} Tk</span>
                                </div>
                                <div class="cart-delete">
                                    <a href="/order/{{ $list->id }}/delete"><i class="ti-trash"></i></a>
                                </div>
                            </li>
                            @php( $T + 1)
                            @php( $Tprice =+ $list->price)
                            @endforeach

                            <li class="cart-space">
                                <div class="cart-sub">
                                    <h4>Total</h4>
                                </div>
                                <div class="cart-price">
                                    <h4>{{ $Tprice }}.0 Tk</h4>
                                </div>
                            </li>

                            <li class="cart-btn-wrapper">
                                <a class="cart-btn btn-hover" href="order/">view Order</a>
                                <!-- <a class="cart-btn btn-hover" href="#">checkout</a> -->
                            </li>

                        </ul>
                    </div>
