<!doctype html>
<html class="no-js" lang="en">

@include('inc.headcss')

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- header start -->
    <header>
        <div class="header-area">
            <div class="header-left-sidebar">
                <div class="logo">
                    <a href="/"><img src="assets/img/logo/logo.png" alt=""></a>
                </div>
                <div class="main-menu menu-hover">
                    <nav>
                        <ul>
                            <li><a href="#">Home</a>
                                <ul class="single-dropdown">
                                    <li><a href="{{ url('/about') }}">about us</a></li>
                                    <li><a href="{{ url('/login') }}">login</a></li>
                                    <li><a href="{{ route('register') }}">register</a></li>
                                    <li><a href="{{ url('/order') }}">Order page</a></li>
                                    <li><a href="{{ url('/product') }}">Product</a></li>
                                    <li><a href="{{ url('/like') }}">Like</a></li>
                                    <li><a href="{{ url('/contact') }}">contact</a></li>
                                </ul>
                            </li>

                            <li><a href="#">Latest <span>New</span></a>
                                <div class="mega-menu-dropdown mega-dropdown-width">
                                    <!-- <div class="mega-dropdown-style mega-common4 mb-40">
                                        <h4 class="mega-subtitle"> Clothing</h4>
                                        <ul>
                                            <li><a href="#"> New Products</a></li>
                                            <li><a href="#"> Jackets</a></li>
                                            <li><a href="#"> Dress</a></li>
                                            <li><a href="#"> Winter Collection</a></li>
                                            <li><a href="#"> Ladis Jeans</a></li>
                                            <li><a href="#"> Multipacks</a></li>
                                            <li><a href="#"> Shorts</a></li>
                                            <li><a href="#"> Night wear</a></li>
                                            <li><a href="#"> Top Products</a></li>
                                        </ul>
                                    </div>
                                    <div class="mega-dropdown-style mega-common4 mb-40">
                                        <h4 class="mega-subtitle"> New Products</h4>
                                        <ul>
                                            <li><a href="#">View All</a></li>
                                            <li><a href="#">New Trand</a></li>
                                            <li><a href="#">Boots</a></li>
                                            <li><a href="#">Flat Shoes</a></li>
                                            <li><a href="#">Women Heels</a></li>
                                            <li><a href="#">Slippers</a></li>
                                            <li><a href="#">Socks & Tights</a></li>
                                            <li><a href="#">Trainers</a></li>
                                        </ul>
                                    </div>
                                    <div class="mega-dropdown-style mega-common4 mb-40">
                                        <h4 class="mega-subtitle">Tranding</h4>
                                        <ul>
                                            <li><a href="#">Weeding</a></li>
                                            <li><a href="#">Winter</a></li>
                                            <li><a href="#">Holidays</a></li>
                                            <li><a href="#">Night Party</a></li>
                                            <li><a href="#">Outing Dress</a></li>
                                            <li><a href="#">Outing Dress</a></li>
                                        </ul>
                                    </div>
                                    <div class="mega-dropdown-style mega-common4 discount-mega-common4 mb-40">
                                        <div class="mega-discount">
                                            <h5>Make A Discount</h5>
                                            <h2>UP TO 30%</h2>
                                        </div>
                                    </div> -->
                                    <div class="mega-banner-img-2">
                                        <a href="single-product.html"><img src="assets/img/bg/3.png" alt=""></a>
                                    </div>
                                </div>
                            </li>

                            <li><a href="#">Electronic Devices<span>New</span></a>
                                <div class="mega-menu-dropdown mega-dropdown-width-2">
                                    <div class="mega-dropdown-style mega-common2 mega-common4">
                                        <h4 class="mega-subtitle">Devices</h4>
                                        <ul>
                                            <li><a href="{{ url('search/Mobile') }}">Mobile</a></li>
                                            <li><a href="{{ url('search/computer') }}">Computer</a></li>
                                            <li><a href="{{ url('search/printers') }}">Printers</a></li>
                                            <li><a href="{{ url('search/cameras') }}">cameras</a></li>
                                            <li><a href="{{ url('search/fridge') }}">Fridge</a></li>
                                            <li><a href="{{ url('search/oven') }}">Oven</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>

                            <li><a href="searchc/2">Women's Fashion<span>New</span></a>
                                <div class="mega-menu-dropdown mega-dropdown-width-2">
                                    <div class="mega-dropdown-style mega-common2 mega-common4">
                                        <h4 class="mega-subtitle">New Sale</h4>
                                        <ul>
                                            <li><a href="{{ url('search/ground') }}">Ground</a></li>
                                            <li><a href="{{ url('search/top') }}">Top</a></li>
                                            <li><a href="{{ url('search/geans') }}">Geans</a></li>
                                            <li><a href="{{ url('search/list') }}">list</a></li>
                                            <li><a href="{{ url('search/column') }}">column</a></li>
                                            <li><a href="{{ url('search/style') }}">style</a></li>
                                            <li><a href="{{ url('search/shopp') }}">shopp</a></li>
                                            <li><a href="{{ url('search/shli') }}">shli</a></li>
                                        </ul>
                                    </div>

                                    <div class="mega-dropdown-style mega-common2 mega-common4">
                                        <h4 class="mega-subtitle">Weddings & Events</h4>
                                        <ul>
                                            <li><a href="{{ url('search/banarasee') }}">Banarasee</a></li>
                                            <li><a href="{{ url('search/lahenga') }}">Lahenga</a></li>
                                            <li><a href="{{ url('search/gaoun') }}">Gaoun</a></li>
                                            <li><a href="{{ url('search/saree') }}">saree</a></li>
                                            <li><a href="{{ url('search/makeup') }}">Makeup Item</a></li>
                                            <li><a href="{{ url('search/shoes') }}">Shoes</a></li>
                                            <li><a href="{{ url('search/ornaments') }}">Ornaments</a></li>
                                        </ul>
                                    </div>


                                </div>
                            </li>

                            <li><a href="searchc/3">Men's Fashion</a>
                                <div class="mega-menu-dropdown mega-dropdown-width-2">
                                    <div class="mega-dropdown-style mega-common2 mega-common4">
                                        <h4 class="mega-subtitle">Hot Sale</h4>
                                        <ul>
                                            <li><a href="{{ url('search/t_shart') }}">T-shart</a></li>
                                            <li><a href="{{ url('search/pant') }}">Pant</a></li>
                                            <li><a href="{{ url('search/perfume') }}">Perfume</a></li>
                                            <li><a href="{{ url('search/shirt') }}">Shirt</a></li>
                                            <li><a href="{{ url('search/shoes') }}">Shoes</a></li>
                                            <li><a href="{{ url('search/accesories') }}">Accesories</a></li>
                                            <li><a href="{{ url('search/facial') }}">Facial item</a></li>
                                        </ul>
                                    </div>
                                    
                                    <div class="mega-dropdown-style mega-common2 mega-common4">
                                        <h4 class="mega-subtitle">Accessories</h4>
                                        <ul>
                                            <li><a href="{{ url('search/watches') }}">Watches</a></li>
                                            <li><a href="{{ url('search/tie') }}">Tie</a></li>
                                            <li><a href="{{ url('search/belt') }}">Belt</a></li>
                                            <li><a href="{{ url('search/band') }}">band</a></li>
                                            
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li><a href="searchc/5">Sports & Outdoor</a>
                                <div class="mega-menu-dropdown mega-dropdown-width-2">
                                    <div class="mega-dropdown-style mega-common2 mega-common4">
                                        <h4 class="mega-subtitle"> shop layout</h4>
                                        <ul>
                                             <li><a href="shop-grid-2-col.html">Footbol</a></li>
                                            <li><a href="shop-grid-3-col.html">Cricket</a></li>
                                            <li><a href="shop.html">Golf</a></li>
                                            <li><a href="shop-grid-box.html">Pool</a></li>
                                            <li><a href="shop-list-1-col.html">Tennis</a></li>
                                            <li><a href="shop-list-2-col.html">Hockey</a></li>
                                            <li><a href="shop-list-box.html">Basketball</a></li>
                                            <li><a href="cart.html">Table tennis</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>

                            <li><a href="searchc/4">Babies & Toys</a>
                                <div class="mega-menu-dropdown mega-dropdown-width-2">
                                    <div class="mega-dropdown-style mega-common2 mega-common4">
                                        <ul>
                                            <li><a href="shop-grid-2-col.html"> grid 2 column</a></li>
                                            <li><a href="shop-grid-3-col.html"> grid 3 column</a></li>
                                            <li><a href="shop.html">grid 4 column</a></li>
                                            <li><a href="shop-grid-box.html">grid box style</a></li>
                                            <li><a href="shop-list-1-col.html"> list 1 column</a></li>
                                            <li><a href="shop-list-2-col.html">list 2 column</a></li>
                                            <li><a href="shop-list-box.html">list box style</a></li>
                                            <li><a href="cart.html">shopping cart</a></li>
                                            <li><a href="wishlist.html">wishlist</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>

                            <li><a href="{{ url('/contact') }}">contact</a></li>
                            <li><a href="{{ url('/about') }}">about us</a></li>

                        </ul>
                    </nav>
                </div>
                <!-- <div class="currency">
                    <ul>
                        <li><a href="#">EN</a></li>
                        <li><a href="#">RN</a></li>
                    </ul>
                </div> -->
            </div>

            <!-- // -->

            <div class="header-right-sidebar">
                <div class="header-search-cart-login">
                    <div class="logo">
                        <a href="index.html">
                            <img src="assets/img/logo/logo.png" alt="">
                        </a>
                    </div>

                    <!-- /search/ -->

                    <div class="header-search">
                        <form action="/search">
                            <input placeholder="Search What you want" type="text">
                            <button>
                                <i class="ti-search"></i>
                            </button>
                        </form>
                    </div>

                    <!-- order -->

                        <div class="header-cart">
                            <a class="icon-cart-furniture" href="/order">
                                <i class="ti-shopping-cart"></i>
                                <span class="shop-count-furniture green">02</span>
                            </a>
                            <ul class="cart-dropdown">

                                
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
                                     <a class="cart-btn btn-hover" href="#">checkout</a> 
                                </li>
                            </ul>
                        </div>

                    <!-- // -->

                    <div class="header-login">
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

                    <!-- order -->

                    


                </div>


                <!-- <div class="mobile-menu-area clearfix d-md-block col-md-12 col-lg-12 col-12 d-lg-none d-xl-none">
                    <div class="mobile-menu">
                        <nav id="mobile-menu-active">
                            <ul class="menu-overflow">
                                <li><a href="#">HOME</a>
                                    <ul>
                                        <li><a href="index.html">Fashion</a></li>
                                        <li><a href="index-fashion-2.html">Fashion style 2</a></li>
                                        <li><a href="index-fruits.html">Fruits</a></li>
                                        <li><a href="index-book.html">book</a></li>
                                        <li><a href="index-electronics.html">electronics</a></li>
                                        <li><a href="index-electronics-2.html">electronics style 2</a></li>
                                        <li><a href="index-food.html">food & drink</a></li>
                                        <li><a href="index-furniture.html">furniture</a></li>
                                        <li><a href="index-handicraft.html">handicraft</a></li>
                                        <li><a href="index-smart-watch.html">smart watch</a></li>
                                        <li><a href="index-sports.html">sports</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">pages</a>
                                    <ul>
                                        <li><a href="about-us.html">about us</a></li>
                                        <li><a href="menu-list.html">menu list</a></li>
                                        <li><a href="login.html">login</a></li>
                                        <li><a href="register.html">register</a></li>
                                        <li><a href="cart.html">cart page</a></li>
                                        <li><a href="checkout.html">checkout</a></li>
                                        <li><a href="wishlist.html">wishlist</a></li>
                                        <li><a href="contact.html">contact</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">shop</a>
                                    <ul>
                                        <li><a href="shop-grid-2-col.html"> grid 2 column</a></li>
                                        <li><a href="shop-grid-3-col.html"> grid 3 column</a></li>
                                        <li><a href="shop.html">grid 4 column</a></li>
                                        <li><a href="shop-grid-box.html">grid box style</a></li>
                                        <li><a href="shop-list-1-col.html"> list 1 column</a></li>
                                        <li><a href="shop-list-2-col.html">list 2 column</a></li>
                                        <li><a href="shop-list-box.html">list box style</a></li>
                                        <li><a href="product-details.html">tab style 1</a></li>
                                        <li><a href="product-details-2.html">tab style 2</a></li>
                                        <li><a href="product-details-3.html"> tab style 3</a></li>
                                        <li><a href="product-details-4.html">sticky style</a></li>
                                        <li><a href="product-details-5.html">sticky style 2</a></li>
                                        <li><a href="product-details-6.html">gallery style</a></li>
                                        <li><a href="product-details-7.html">gallery style 2</a></li>
                                        <li><a href="product-details-8.html">fixed image style</a></li>
                                        <li><a href="product-details-9.html">fixed image style 2</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">BLOG</a>
                                    <ul>
                                        <li><a href="blog.html">blog 3 colunm</a></li>
                                        <li><a href="blog-2-col.html">blog 2 colunm</a></li>
                                        <li><a href="blog-sidebar.html">blog sidebar</a></li>
                                        <li><a href="blog-details.html">blog details</a></li>
                                        <li><a href="blog-details-sidebar.html">blog details 2</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html"> Contact  </a></li>
                            </ul>
                        </nav>
                    </div>
                </div> -->


                <div class="slider-area ">
                    <div class="slider-active owl-carousel">

                        <div class="single-slider single-slider-hm1 bg-img height-100vh" style="background-image: url(assets/img/slider/15.jpg)">
                            <div class="slider-content slider-animation slider-content-style-1 slider-animated-1">
                                <h1 class="animated">Fashion</h1>
                                <p class="animated">Create you own style for better looks. </p>
                            </div>
                            <div class="position-slider-img">
                                <div class="slider-img-1">
                                    <img src="assets/img/slider/9.png" alt="">
                                </div>
                                <!-- <div class="slider-img-2">
                                    <img class="tilter" src="assets/img/slider/7.png" alt="">
                                </div> -->
                                <div class="slider-img-3">
                                    <img src="assets/img/slider/8.png" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="single-slider single-slider-hm1 bg-img height-100vh" style="background-image: url(assets/img/slider/15.jpg)">
                            <div class="slider-content slider-animation slider-content-style-1 slider-animated-2">
                                <h1 class="animated">Fashion</h1>
                                <p class="animated">Create you own style for better looks. </p>
                            </div>
                            <div class="position-slider-img">
                                <div class="slider-img-1">
                                    <img src="assets/img/slider/9.png" alt="">
                                </div>
                                <div class="slider-img-4 slider-mrg">
                                    <img class="tilter" src="assets/img/slider/10.png" alt="">
                                </div>
                                <div class="slider-img-3">
                                    <img src="assets/img/slider/8.png" alt="">
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>

            </div>
        </div>
    </header>

    <!-- header end -->

    @include('inc.bannerarea')

    @include('inc.newproduct')

    
    <!-- banner area two start -->
    <div class="banner-area-two">
        <div class="container">
            <div class="row no-gutters">

                <div class="col-lg-6 col-xl-6">
                    <div class="banner-wrapper mrgn-r-4">
                        <a href=""><img src="assets/img/banner/4.jpg" alt=""></a>
                        <div class="banner-wrapper-content">
                            <h3>20% <br><span>off</span></h3>
                            <h2><span>Trending</span> <br>Fashion <br>2020...</h2>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-xl-6">
                    <div class="row no-gutters">
                        <div class="col-lg-12">
                            <div class="banner-wrapper mrgn-b-4">
                                <a href="/"><img src="assets/img/banner/5.jpg" alt=""></a>
                                <div class="banner-wrapper-content2">
                                    <h3>Winter <br>Collection.</h3>
                                    <a href="/">shop now</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="row no-gutters">
                                <div class="col-lg-6">
                                    <div class="banner-wrapper mrgn-r-4">
                                        <a href="/"><img src="assets/img/banner/6.jpg" alt=""></a>
                                        <div class="banner-wrapper-content3">
                                            <h3><span>new</span> <br>fashion</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="banner-wrapper">
                                        <a href="/"><img src="assets/img/banner/7.jpg" alt=""></a>
                                        <div class="banner-wrapper-content4">
                                            <h4>25 December.</h4>
                                            <h2>Gift Shop</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>


    <!-- banner area two end -->
    <!-- all products area start -->
    <div class="all-products-area pt-115 pb-50">
        <div class="pl-100 pr-100">
            <div class="container-fluid">
                <div class="section-title text-center mb-60">
                    <h2>All Products</h2>
                </div>
                <div class="product-style">
                    <div class="product-tab-list text-center mb-95 nav product-menu-mrg" role="tablist">
                        <a class="active" href="#home1" data-toggle="tab" role="tab" aria-selected="true" aria-controls="home1">
                            <h4>all </h4>
                        </a>
                        <a href="#home2" data-toggle="tab" role="tab" aria-selected="false" aria-controls="home2">
                            <h4>woman </h4>
                        </a>
                        <a href="#home3" data-toggle="tab" role="tab" aria-selected="false" aria-controls="home3">
                            <h4>man</h4>
                        </a>
                        <a href="#home4" data-toggle="tab" role="tab" aria-selected="false" aria-controls="home4">
                            <h4>Device</h4>
                        </a>
                        <a href="#home5" data-toggle="tab" role="tab" aria-selected="false" aria-controls="home5">
                            <h4>kids</h4>
                        </a>
                    </div>

                    <div class="tab-content">



                        <div class="tab-pane active show fade" id="home1" role="tabpanel">
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
                        

                        <div class="tab-pane fade" id="home2" role="tabpanel">
                            <div class="custom-row">

                                @foreach($product ['itemsW'] as $item)

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


                        <div class="tab-pane fade" id="home3" role="tabpanel">
                            <div class="custom-row">

                                @foreach($product ['itemsM'] as $item)
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


                        <div class="tab-pane fade" id="home4" role="tabpanel">
                            <div class="custom-row">

                                @foreach($product ['itemsD'] as $item)
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


                        <div class="tab-pane fade" id="home5" role="tabpanel">
                            <div class="custom-row">

                                @foreach($product ['itemsK'] as $item)
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
        </div>
    </div>


    <!-- all products area end -->
    <!-- brand logo area start -->
    <div class="brand-logo-area pl-100 pr-100">
        <div class="ptb-135 gray-bg">
            <div class="brand-logo-active owl-carousel">
                <div class="single-brand">
                    <img src="assets/img/brand-logo/1.png" alt="">
                </div>
                <div class="single-brand">
                    <img src="assets/img/brand-logo/2.png" alt="">
                </div>
                <div class="single-brand">
                    <img src="assets/img/brand-logo/1.png" alt="">
                </div>
                <div class="single-brand">
                    <img src="assets/img/brand-logo/3.png" alt="">
                </div>
                <div class="single-brand">
                    <img src="assets/img/brand-logo/4.png" alt="">
                </div>
                <div class="single-brand">
                    <img src="assets/img/brand-logo/5.png" alt="">
                </div>
                <div class="single-brand">
                    <img src="assets/img/brand-logo/6.png" alt="">
                </div>
            </div>
        </div>
    </div>



    @include('inc.footer')

    
    @include('inc.modal')


    @include('inc.js')


</body>

</html>