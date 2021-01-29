<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index($role)
    {
        $users = User::role($role)->get();
        return view('index',compact('users','role'));
    }

    public function show($id)
    {
        $user = User::find($id);
        return view('show',compact('user'));
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('edit',compact('user'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required'
        ]);

        $user = User::findOrFail($id);
        $user->update($request->all());
        return redirect()->back()->with('success','Data updated successfully');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->back()->with('success','User delete successfully');
    }
}
