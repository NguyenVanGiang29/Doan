<?php

namespace App\Http\Controllers;

use App\Models\T_post;
use App\Http\Requests\StoreT_postRequest;
use App\Http\Requests\UpdateT_postRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $t_post = T_post::all();
        return $t_post;
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
        $t_post = new T_post;
        $t_post->phone = $request->phone;
        $t_post->method = $request->method;
        $t_post->subject = $request->subject;
        $t_post->topic = $request->topic;
        $t_post->class = $request->class;
        $t_post->price = $request->price;
        $t_post->time_teaching = $request->time_teaching;
        $t_post->desc = $request->desc;
        $t_post->achievement = $request->achievement;
        $t_post->experience = $request->experience;
        $t_post->tutor_id = $request->tutor_id;

        $t_post->save();

        return response()->json(['message' => 'Tạo bài viết thành công!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\T_post  $t_post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $t_post = T_post::find($id);
        return $t_post;
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
    public function update(Request $request, $id)
    {
        $t_post = T_post::find($id);
        DB::beginTransaction();

        try {
            $t_post->phone = $request->phone;
            $t_post->method = $request->method;
            $t_post->subject = $request->subject;
            $t_post->topic = $request->topic;
            $t_post->class = $request->class;
            $t_post->price = $request->price;
            $t_post->time_teaching = $request->time_teaching;
            $t_post->desc = $request->desc;
            $t_post->achievement = $request->achievement;
            $t_post->experience = $request->experience;
            $t_post->tutor_id = $request->tutor_id;

            $t_post->update();
            DB::commit();
            return response()->json(['message' => 'Sửa thành công bài viết!']);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json($e);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\T_post  $t_post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $t_post = T_post::find($id);
        $t_post->delete();

        return response()->json(['message' => 'Xóa bài viết thành công']);
        
    }
}
