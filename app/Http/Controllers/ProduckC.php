<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Produck;


class ProduckC extends Controller
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

        $producks = Produck::all()->where('user_id',$user);



        return view('produck.index',compact('producks'));
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

        return view('produck.create',compact('user'));

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
        Produck::create($request->all());

        //$produck= new Produck;
        //$produck->name = $request->name;
        //$produck->save();

        return redirect('/produck');


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
        
        $produck = Produck::findOrFail($id);

        if($user->admin('adm')){

            return view('produck.show',compact('produck'));

        }
        elseif ($user->admin('com')) {

            return view('produck.show',compact('produck'));
            
        }


        return view('produck.showuser',compact('produck'));
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
        $produck = Produck::findOrFail($id);

        return view('produck.edit',compact('produck'));
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
        Produck::findOrFail($id)->update($request->all());

        return redirect('/produck');

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

        produck::whereId($id)->delete();

        return redirect('/produck');

    }
}
