<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Product;


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
        $user = Auth::user()->id;

        $products = Product::all()->where('user_id',$user);



        return view('product.index',compact('products'));
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

        return view('product.create',compact('user'));

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
        //return $request->all();
        Product::create($request->all());

        //$produck= new Produck;
        //$produck->name = $request->name;
        //$produck->save();

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

        // if($user->admin('adm')){

        //     return view('product.show',compact('product'));

        // }
        // elseif ($user->admin('com')) {

        //     return view('product.show',compact('product'));
            
        // }


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

        //return $qury;

        $product = [];



        $product ['items'] = Product::where('name',$qury)->get();

        
        return view('product.search',compact('product'));

    }

}
