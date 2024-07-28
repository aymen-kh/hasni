<?php

namespace App\Http\Controllers\Item;

use App\Http\Controllers\Controller;
use App\Models\Item\Beverage;
use Illuminate\Http\Request;

class BeverageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $beverages = Beverage::all();
        return view('beverages.index', compact('beverages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('beverages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $beverage = new Beverage();
        $beverage->name = $request->input('name');
        $beverage->description = $request->input('description');
        $beverage->price = $request->input('price');
        $beverage->save();
        return redirect()->route('beverages.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $beverage = Beverage::find($id);
        return view('beverages.show', compact('beverage'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $beverage = Beverage::find($id);
        return view('beverages.edit', compact('beverage'));
    }
}
