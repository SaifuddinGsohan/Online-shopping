<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Product;
use App\Categories;
use Storage;


class ProductC extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $user = Auth::user();

        $product ['items'] = Product::where('user_id', Auth::id())->get();

        if($user->admin('Admin')){

            return view('product.index',compact('product'));

        }
        elseif ($user->admin('Company')) {

            return view('product.index',compact('product'));
            
        }


        return redirect('/');

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $user = Auth::user();

        if($user->admin('Admin')){

            return view('product.create',compact('user'));

        }
        elseif ($user->admin('Company')) {

            return view('product.create',compact('user'));
            
        }


        return redirect('/');

        

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image = '';
        if($request->has('photo')){
            $image = $request->file('photo')->store('photos');}
        $products = new Product();
        $products->name = $request->name;
        $products->details = $request->details;
        $products->description = $request->description;
        $products->price = $request->price;
        $products->user_id = Auth::id();
        $products->photo = $image;
        $products->tag = $request->tag;
        $products->tag1 = $request->tag1;
        $products->tag2 = $request->tag2;
        $products->categorie_id = $request->categorie_id;
        $products->save();
        
        return redirect('/product');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $user = Auth::user();
        
        $product ['product'] = Product::findOrFail($id);
        $pu_id = $product ['product']->user_id;
        $product ['items'] = Product::where('user_id',$pu_id)->get();


        return view('product.show',compact('product'));
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $product = Product::findOrFail($id);

        return view('product.edit',compact('product'));
    }

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
        Product::findOrFail($id)->update($request->all());

        return redirect('/product');

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

        product::whereId($id)->delete();

        return redirect('/product');

    }

    // Search //

    public function search($qury)
    {
        //
        $product = [];

        $product ['items'] = Product::where('name',$qury)->orWhere('tag' ,$qury)->orWhere('tag1',$qury)->get();

      
        
         return view('product.search',compact('product'));

    }

    public function searchCategorie($qury)
    {
  
        $product = [];

        $product ['items'] = Product::where('categorie_id', $qury )->get();
        
        return view('product.search',compact('product'));

    }

    

}
