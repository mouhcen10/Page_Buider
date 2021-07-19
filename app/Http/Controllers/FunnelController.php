<?php

namespace App\Http\Controllers;

use App\Models\Funnel;
use Illuminate\Http\Request;

class FunnelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $funnels = Funnel::all();

        return view('funnel.index', [
            'funnels' => $funnels
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('funnel.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $funnel = Funnel::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Funnel  $funnel
     * @return \Illuminate\Http\Response
     */
    public function show(Funnel $funnel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Funnel  $funnel
     * @return \Illuminate\Http\Response
     */
    public function edit(Funnel $funnel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Funnel  $funnel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Funnel $funnel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Funnel  $funnel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Funnel $funnel)
    {
        //
    }
}
