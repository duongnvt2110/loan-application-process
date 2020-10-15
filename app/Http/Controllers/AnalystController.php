<?php

namespace App\Http\Controllers;

use App\Analyst;
use Illuminate\Http\Request;

class AnalystController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('analyst.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $this->authorize('create',Analyst::class);
        return view('analyst.create');
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
        $this->authorize('create',analyst::class);
        return redirect()->route('analyst.index')->with('success','Create is success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Analyst  $analyst
     * @return \Illuminate\Http\Response
     */
    public function show(Analyst $analyst)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Analyst  $analyst
     * @return \Illuminate\Http\Response
     */
    public function edit(Analyst $analyst)
    {
        //
        $this->authorize('update',$analyst);
        $analyst = '';
        return view('analyst.edit',compact('analyst'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Analyst  $analyst
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Analyst $analyst)
    {
        //
        $this->authorize('update',$analyst);
        return redirect()->route('analyst.index')->with('success','Update is success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Analyst  $analyst
     * @return \Illuminate\Http\Response
     */
    public function destroy(Analyst $analyst)
    {
        //
        $this->authorize('update',$analyst);
        return redirect()->route('analyst.index')->with('success','Delete is success');
    }
}
