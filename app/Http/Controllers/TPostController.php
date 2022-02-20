<?php

namespace App\Http\Controllers;

use App\Models\T_post;
use App\Http\Requests\StoreT_postRequest;
use App\Http\Requests\UpdateT_postRequest;

class TPostController extends Controller
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
     * @param  \App\Http\Requests\StoreT_postRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreT_postRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\T_post  $t_post
     * @return \Illuminate\Http\Response
     */
    public function show(T_post $t_post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\T_post  $t_post
     * @return \Illuminate\Http\Response
     */
    public function edit(T_post $t_post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateT_postRequest  $request
     * @param  \App\Models\T_post  $t_post
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateT_postRequest $request, T_post $t_post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\T_post  $t_post
     * @return \Illuminate\Http\Response
     */
    public function destroy(T_post $t_post)
    {
        //
    }
}
