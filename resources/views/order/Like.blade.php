<!doctype html>
<html class="no-js" lang="zxx">
    
    @include('inc.headcss')

    <body>
        <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        

        @include('inc.header')

		
        <!-- shopping-cart-area start -->
        <div class="cart-main-area pt-95 pb-100 wishlist">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h1 class="cart-heading">Like</h1>
                        <form action="#">
                            <div class="table-content table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>remove</th>
                                            <th>images</th>
                                            <th>Product</th>
                                            <th>Price</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach($lists as $list)

                                        <tr>
                                            <td class="product-remove"><a href="/like/{{$list->id}}/delete"><i class="pe-7s-close"></i></a></td>
                                            <td class="product-thumbnail">
                                                <a href="#"><img src="{{ asset('storage') }}/{{ $list->photo }}" alt=""></a>
                                            </td>
                                            <td class="product-name"><a href="{{route('product.show',$list->id)}}">{{$list->name}}</a></td>
                                            
                                            
                                            <td class="product-subtotal">{{$list->price}} Tk</td>
                                        </tr>

                                        @endforeach
                                        
                                    </tbody>
                                </table>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- shopping-cart-area end -->
		
        @include('inc.footer')

		
        @include('inc.sidemodal')
		
		
        @include('inc.js')
		
		
		
    </body>
</html>
