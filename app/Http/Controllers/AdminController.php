<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('dashboard',compact('users'));
    }

    public function store(UserRequest $request){
        User::create($request->validated());
        return back()->with('success', 'Account Added Successfully');
    }

    public function delete(User $user, Request $request)
    {
        try {
            $user->delete();
            return back()->with('success', 'Account Deleted Successfully');
        } catch (Exception $e) {
            return back()->with('error', 'can not delete this User');
        }

    }
}
