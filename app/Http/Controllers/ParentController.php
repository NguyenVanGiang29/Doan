<?php

namespace App\Http\Controllers;

use App\Models\Parentt;
use App\Models\User;
use App\Http\Requests\StoreParenttRequest;
use App\Http\Requests\UpdateParenttRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
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
        $user = User::find($request->user_id);
        $parent = new Parentt;
        DB::beginTransaction();
        try {
            if($request->hasFile('avatar')) {
                $url = Storage::disk('public')->put('avatar', $request->file('avatar'));
                $parent->avatar = $url;
            }
            $parent->job = $request->job;
            $parent->address = $request->address;
            $parent->phone = $request->phone;
            $parent->user_id = $request->user_id;
            $user->name = $request->name;
            $user->state_account = 1;
            $user->save();
            $parent->save();
            DB::commit();
            return response()->json(['message' => 'Thêm thành công!']);
        } catch (\Exception $e) {
            DB::rollBack();
            throw $e;
            return response()->json($e,500);
        }
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
    public function update(UpdateParenttRequest $request, $id)
    {
        $parent = Parentt::where('user_id', $id)->first();
        $user = User::find($request->user_id);
        DB::beginTransaction();
        try {
            if($request->hasFile('avatar')) {
                $url = Storage::disk('public')->put('avatar', $request->file('avatar'));
                $parent->avatar = $url;
            }
            $parent->job = $request->job;
            $parent->address = $request->address;
            $parent->phone = $request->phone;
            $parent->user_id = $request->user_id;
            $user->name = $request->name;
            $user->update();
            $parent->update();
            DB::commit();
            return response()->json(['message' => 'Sửa thành công!']);
        } catch (\Exception $e) {
            DB::rollBack();
            throw $e;
            return response()->json($e,500);
        }
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
