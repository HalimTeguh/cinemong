<?php

namespace App\Http\Controllers;

use App\Models\Bioscop;
use App\Http\Requests\StoreBioscopRequest;
use App\Http\Requests\UpdateBioscopRequest;

class BioscopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBioscopRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBioscopRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bioscop  $bioscop
     * @return \Illuminate\Http\Response
     */
    public function show(Bioscop $bioscop)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bioscop  $bioscop
     * @return \Illuminate\Http\Response
     */
    public function edit(Bioscop $bioscop)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBioscopRequest  $request
     * @param  \App\Models\Bioscop  $bioscop
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBioscopRequest $request, Bioscop $bioscop)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bioscop  $bioscop
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bioscop $bioscop)
    {
        //
    }
}
