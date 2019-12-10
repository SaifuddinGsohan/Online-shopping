<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Order;
use App\Product;
use App\Categories;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    //public function __construct()
    //{
       // $this->middleware('auth');
    //}

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $product = [];

        $product ['items'] = Product::all();

        $product ['itemsM'] = Product::where('categorie_id',3)->get();
        $product ['itemsW'] = Product::where('categorie_id',2)->get();
        $product ['itemsD'] = Product::where('categorie_id',1)->get();
        $product ['itemsK'] = Product::where('categorie_id',4)->get();

        
        

        $orders = Order::where('user_id', Auth::id())->get();
        $products = Product::all();

        foreach($orders as $order){
            
            foreach($products as $produc){

                if($produc->id == $order->product_id){

                   $product ['lists']= $produc;
                }
            }
        }

        $product ['categories'] = Categories::all();

        return view('index',compact('product'));
        
               
               
    }
}
