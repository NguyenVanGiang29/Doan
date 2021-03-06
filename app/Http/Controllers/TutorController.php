<?php

namespace App\Http\Controllers;

use App\Models\Tutor;
use App\Models\User;
use App\Http\Requests\StoreTutorRequest;
use App\Http\Requests\UpdateTutorRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
class TutorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tutors = DB::table('tutors')
                ->join('users', 'users.id', '=', 'tutors.user_id')
                ->get();
        return $tutors;
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
     * @param  \App\Http\Requests\StoreTutorRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTutorRequest $request)
    {
        $user = User::find($request->user_id);
        $tutor = new Tutor;
        DB::beginTransaction();
        try {
            if($request->hasFile('avatar')) {
                $url = Storage::disk('public')->put('avatar', $request->file('avatar'));
                $tutor->avatar = $url;
            }
            $tutor->sex = $request->sex;
            $tutor->job = $request->job;
            $tutor->birthday = $request->birthday;
            $tutor->address = $request->address;
            $tutor->phone = $request->phone;
            $tutor->user_id = $request->user_id;
            $user->name = $request->name;
            $user->state_account = 1;
            $user->save();
            $tutor->save();
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
     * @param  \App\Models\Tutor  $tutor
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tutor = DB::table('tutors')
        ->join('users', 'users.id', '=', 'tutors.user_id')
        ->where('user_id', '=', $id)
        ->select('email', 'name', 'sex', 'job', 'birthday', 'address', 'phone','avatar')
        ->get();

        return $tutor;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tutor  $tutor
     * @return \Illuminate\Http\Response
     */
    public function edit(Tutor $tutor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTutorRequest  $request
     * @param  \App\Models\Tutor  $tutor
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTutorRequest $request, $id)
    {
        $tutor = Tutor::where('user_id', $id)->first();
        DB::beginTransaction();
        try {
            if($request->hasFile('avatar')){
                $url = Storage::disk('public')->put('avatar', $request->file('avatar'));
                $tutor->avatar = $url;
            }
            $tutor->sex = $request->sex;
            $tutor->job = $request->job;
            $tutor->birthday = $request->birthday;
            $tutor->address = $request->address;
            $tutor->phone = $request->phone;
            $tutor->user_id = $request->user_id;

            $tutor->update();
            DB::commit();
            return response()->json(['message' => 'Sửa thành công!']);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json($e);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tutor  $tutor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tutor = Tutor::find($id);
        $tutor->delete();

        return response()->json(['message' => 'Xóa thành công!']);
    }
}
