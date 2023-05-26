<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('admin.user.index');
    }

    public function create(Request $request)
    {
        User::createUser($request);
        return back()->with('message', 'New User Created Successfully');
    }

    public function manage()
    {
        return view('admin.user.manage', ['users' => User::all()]);
    }

    public function edit($id)
    {
        return view('admin.user.edit', ['user' => User::find($id)]);
    }

    public function update(Request $request,$id)
    {
        User::updateUser($request, $id);
        return redirect('/user/manage')->with('message', 'User Updated Successfully');
    }

    public function delete($id)
    {
        User::deleteUser($id);
        return back()->with('message', 'User deleted Successfully');
    }
}
