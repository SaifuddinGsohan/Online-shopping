<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Like;
use App\Order;
use App\Product;


class OrderC extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

       // $uid= Auth::user()->id;

        $lists=[];

        $orders = Order::where('user_id', Auth::id())->get();
        $products = Product::all();

        //return $list[]= $producks->;
        //return $orders;
        //return $producks->user_id;

        foreach($orders as $order){
            
            foreach($products as $product){

                if($product->id == $order->product_id){

                   $lists[]= $product;
                   // $lists['tp'] =+ $product->price; 
                }
            }
        }
        

        //return $list;
        //return $orders;
        //return $producks->user_id;



        return view('order.index',compact('lists'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
       // return $id;

        $user = Auth::user();

        $products = new Order();
        $products->product_id = $id;
        $products->user_id = $user->id;

        // return $products;
        $products->save();
        
  
        //$pid = $request->produck_id;
        //$producks = Produck::findOrFail($pid);

        return redirect('/');

        //$user = Auth::user();

        //return view('produck.create',compact('user'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
         return $request;
        //return add;
        //$user = Auth::user();

        //$item = [];
        //$item['produck_id'] = $request->produck_id;
        //$item['user_id'] = $user->id;

        //Order::create($item);
  
        //$pid = $request->produck_id;
        //$producks = Produck::findOrFail($pid);

        //return view('index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    	
        $order = Order::findOrFail($id);


        return view('order.show',compact('order'));
    }

    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //public function edit($id)
    //{
        //
       // $produck = Produck::findOrFail($id);

       // return view('produck.edit',compact('produck'));
    //}

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        //
       // Produck::findOrFail($id)->update($request->all());

      //  return redirect('/produck');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        $uid = Auth::user()->id;

        Order::where([['user_id',$uid],['product_id',$id]])->delete();

        return redirect('/order');

    }

    // like

     public function like()
    {
        

        $lists=[];
        

        $Likes = Like::where('user_id', Auth::id())->get();
        $products = Product::all();

        foreach($Likes as $Like){
            
            foreach($products as $product){

                if($product->id == $Like->product_id){

                   $lists[]= $product;
                }
            }
        }

        return view('order.like',compact('lists'));

    }

    public function storelike($id)
    {
        
         $user = Auth::user();

        $products = new like();
        $products->product_id = $id;
        $products->user_id = $user->id;

       
        $products->save();

        
  
        //$pid = $request->produck_id;
        //$producks = Produck::findOrFail($pid);

        return redirect('/');

    }

    public function likeDelete($id)
    {
        //

        $uid = Auth::user()->id;

        like::where([['user_id',$uid],['product_id',$id]])->delete();

        return redirect('/like');

    }



}
