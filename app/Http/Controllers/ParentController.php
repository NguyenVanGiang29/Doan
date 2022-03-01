<?php

namespace App\Http\Controllers;

use App\Models\Parentt;
use App\Http\Requests\StoreParenttRequest;
use App\Http\Requests\UpdateParenttRequest;
use Illuminate\Support\Facades\DB;

class ParentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parents = DB::table('parents')
                ->join('users', 'users.id', '=', 'parents.user_id')
                ->get();
        return $parents;
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
     * @param  \App\Http\Requests\StoreParenttRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreParenttRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Parentt  $parentt
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $parent = DB::table('parents')
        ->join('users', 'users.id', '=', 'parents.user_id')
        ->where('user_id', '=', $id)
        ->select('email', 'name', 'job', 'address', 'phone','avatar')
        ->get();

        return $parent;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Parentt  $parentt
     * @return \Illuminate\Http\Response
     */
    public function edit(Parentt $parentt)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateParenttRequest  $request
     * @param  \App\Models\Parentt  $parentt
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateParenttRequest $request, Parentt $parentt)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Parentt  $parentt
     * @return \Illuminate\Http\Response
     */
    public function destroy(Parentt $parentt)
    {
        //
    }
}
