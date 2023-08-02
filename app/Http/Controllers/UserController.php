<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Routing\Controller;
use App\Http\Requests\ProfileRequest;

class UserController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profile = User::get();
        return view('profile',compact('profile'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(ProfileRequest $request, User $profile)
    {
        User::findOrFail($request->id)->update($request->validated());
        return redirect()->back()->with('success', 'User Updated successfully');
    }

}
