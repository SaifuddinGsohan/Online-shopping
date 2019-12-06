 <!-- header start -->
        <header>
            <div class="header-top-furniture wrapper-padding-2 res-header-sm">
                <div class="container-fluid">
                    <div class="header-bottom-wrapper">
                        <div class="logo-2 furniture-logo ptb-30">
                            <a href="/">
                                <img src="assets/img/logo/2.png" alt="">
                            </a>
                        </div>
                        <div class="menu-style-2 furniture-menu menu-hover">
                            <nav>
                                <ul>

                                    <li><a href="#">Home</a>
                                        <ul class="single-dropdown">
                                            <li><a href="{{ url('/about') }}">about us</a></li>
                                            <li><a href="{{ url('/login') }}">login</a></li>
                                            <li><a href="{{ route('register') }}">egister</a></li>
                                            <li><a href="{{ url('/order') }}">Order</a></li>
                                            <li><a href="{{ url('/like') }}">Like</a></li>
                                            <li><a href="{{ url('/contact') }}">contact</a></li>
                                        </ul>
                                    </li>

                                    <li><a href="#">Devices</a>
                                        
                                        <ul class="single-dropdown">
                                            <li><a href="shop-grid-2-col.html">Mobile</a></li>
                                            <li><a href="shop-grid-3-col.html">Computer</a></li>
                                            <li><a href="shop-grid-box.html">Tv</a></li>
                                            <li><a href="shop-list-1-col.html">Ac</a></li>
                                            <li><a href="shop-list-2-col.html">Firig</a></li>
                                            <li><a href="shop-list-box.html">Oven</a></li>
                                        </ul>
                                          
                                    </li>

                                    <li><a href="#">Women</a>
                                        
                                        <ul class="single-dropdown">
                                            <li><a href="">Top</a></li>
                                            <li><a href="">Ground</a></li>
                                            <li><a href="">Top</a></li>
                                            <li><a href="">Top</a></li>
                                            <li><a href="">list</a></li>
                                            <li><a href="">column</a></li>
                                            <li><a href="">style</a></li>
                                            <li><a href="">shopp</a></li>
                                            <li><a href="">shli</a></li>
                                        </ul>
                                            
                                    </li>

                                    <li><a href="#">Men</a>
                                        
                                        <ul class="single-dropdown">
                                            <li><a href="shop-grid-2-col.html">T-shart</a></li>
                                            <li><a href="shop-grid-3-col.html">Pant</a></li>
                                            <li><a href="shop.html">Gabadin</a></li>
                                            <li><a href="shop-grid-box.html">Shart</a></li>
                                            <li><a href="shop-list-1-col.html">Show</a></li>
                                            <li><a href="shop-list-2-col.html">Cast</a></li>
                                            <li><a href="cart.html">Scat</a></li>
                                            <li><a href="wishlist.html">Shlt</a></li>
                                        </ul>

                                    </li>

                                    <li><a href="#">Sports</a>
                                        
                                        <ul class="single-dropdown">
                                            <li><a href="shop-grid-2-col.html">Footbol</a></li>
                                            <li><a href="shop-grid-3-col.html">Cricket</a></li>
                                            <li><a href="shop.html">Golf</a></li>
                                            <li><a href="shop-grid-box.html">Pool</a></li>
                                            <li><a href="shop-list-1-col.html">Tennis</a></li>
                                            <li><a href="shop-list-2-col.html">Hockey</a></li>
                                            <li><a href="shop-list-box.html">Basketball</a></li>
                                            <li><a href="cart.html">Table tennis</a></li>
                                        </ul>

                                    </li>

                                    <li><a href="{{ url('/contact') }}">contact</a></li>
                                    <li><a href="{{ url('/about') }}">about us</a></li>

                                </ul>
                            </nav>
                        </div>
                        <!-- // -->
                        <div class="header-cart">
                            <a class="icon-cart-furniture" href="/order">
                                <i class="ti-shopping-cart"></i>
                                <span class="shop-count-furniture green">02</span>
                            </a>
                            <ul class="cart-dropdown">

                                <!-- // -->
                                <li class="single-product-cart">
                                    <div class="cart-img">
                                        <a href="#"><img src="assets/img/cart/1.jpg" alt=""></a>
                                    </div>
                                    <div class="cart-title">
                                        <h5><a href="#"> Bits Headphone</a></h5>
                                        <h6><a href="#">Black</a></h6>
                                        <span>$80.00 x 1</span>
                                    </div>
                                    <div class="cart-delete">
                                        <a href="#"><i class="ti-trash"></i></a>
                                    </div>
                                </li>
                                

                                <li class="cart-space">
                                    <div class="cart-sub">
                                        <h4>Total</h4>
                                    </div>
                                    <div class="cart-price">
                                        <h4>$240.00</h4>
                                    </div>
                                </li>

                                <li class="cart-btn-wrapper">
                                    <a class="cart-btn btn-hover" href="/order">view cart</a>
                                    <!-- <a class="cart-btn btn-hover" href="#">checkout</a> -->
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom-furniture wrapper-padding-2 border-top-3">
                <div class="container-fluid">
                    <div class="furniture-bottom-wrapper">
                        <div class="furniture-login">
                            <!-- // -->
                            <ul>
                                <!-- Authentication Links -->
                                @guest
                                    <li>
                                        <a href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                    @if (Route::has('register'))
                                        <li>
                                            <a href="{{ route('register') }}">{{ __('Register') }}</a>
                                        </li>
                                    @endif
                                @else
                                    <li>
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }} <span class="caret"></span>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                @endguest
                            </ul>

                        </div>


                        <div class="furniture-search">
                            <form action="#">
                                <input placeholder="I am Searching for . . ." type="text">
                                <button>
                                    <i class="ti-search"></i>
                                </button>
                            </form>
                        </div>

                        <div class="furniture-wishlist">
                            <ul>
                                <!-- <li><a data-toggle="modal" data-target="#exampleCompare" href="#"><i class="ti-reload"></i> Compare</a></li> -->
                                <li><a href="/like"><i class="ti-heart"></i>Like</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        
        <!-- header end -->