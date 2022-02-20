<?php

namespace App\Http\Controllers;

use App\Models\P_post;
use App\Http\Requests\StoreP_postRequest;
use App\Http\Requests\UpdateP_postRequest;

class PPostController extends Controller
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
     * @param  \App\Http\Requests\StoreP_postRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreP_postRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\P_post  $p_post
     * @return \Illuminate\Http\Response
     */
    public function show(P_post $p_post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\P_post  $p_post
     * @return \Illuminate\Http\Response
     */
    public function edit(P_post $p_post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateP_postRequest  $request
     * @param  \App\Models\P_post  $p_post
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateP_postRequest $request, P_post $p_post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\P_post  $p_post
     * @return \Illuminate\Http\Response
     */
    public function destroy(P_post $p_post)
    {
        //
    }
}
