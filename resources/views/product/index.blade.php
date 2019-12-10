<!doctype html>
<html class="no-js" lang="en">

@include('inc.headcss')

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
     <!-- header start -->
        <header>
            <div class="header-top-furniture wrapper-padding-2 res-header-sm">
                <div class="container-fluid">
                    <div class="header-bottom-wrapper">
                        <div class="logo-2 furniture-logo ptb-30">
                            <a href="{{ url('/') }}">
                                <img src="assets/img/logo/2.png" alt="">
                            </a>
                        </div>
                        <div class="menu-style-2 furniture-menu menu-hover">
                            <nav>
                                <ul>
                                    <li><a href="{{ url('/') }}">home</a></li>
                                    <li><a href="{{ url('/about') }}">about us</a></li>
                                     
                                    <li><a href="{{ url('/like') }}">Like</a></li>
                                    <li><a href="{{ url('/contact') }}">contact</a></li> 
                                   
                                </ul>
                            </nav>
                        </div>
                      
                        <div class="menu-style-2 furniture-menu menu-hover">
                            <nav>
                                <ul>
                                    <li><a class="icon-cart-furniture" href="{{ url('/product/create') }}">Add Product</a></li>
                                </ul>
                            </nav>    
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
                                <li><a data-toggle="modal" data-target="#exampleCompare" href="#"><i class="ti-reload"></i> Compare</a></li>
                                <li><a href="wishlist.html"><i class="ti-heart"></i> Wishlist</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        
        <!-- header end -->
    
    <!-- all products area start -->
    <div class="all-products-area pt-115 pb-50">
        <div class="pl-100 pr-100">
            <div class="container-fluid">
                <div class="section-title text-center mb-60">
                    <h2>All Product</h2>
                </div>
                <div class="product-style">
                    
                    <div class="tab-content">

                        
                            <div class="custom-row">

                                @foreach($product ['items'] as $item)

                                    <div class="col-lg-4 col-md-6">
                                        <div class="product-wrapper product-box-style mb-30">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img src="{{ asset('storage') }}/{{ $item->photo }}" alt="">
                                                </a>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"  >
                                                    <a class="animate-left" title="Delete" href="product/{{$item->id}}/delete">
                                                        <input type="hidden" name="_method" value="POST">
                                                        x
                                                    </a>
                                                    <!-- <span>x</span> -->
                                                </button>
                                                <!-- <span>hot</span> -->
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