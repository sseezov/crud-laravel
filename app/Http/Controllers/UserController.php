<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index', ['users' => $users]);
    }

    public function create()
    {
        return view('users.create');
    }

    public function add(Request $request)
    {
        // dd($request);
        $data = $request->validate([
            'username' => 'required',
            'email' => 'required|unique:users',
            'gender' => 'nullable',
            'birthday' => 'nullable',
        ]);

        $newUser = User::create($data);
        return redirect(route('users.index'));
    }
    public function edit(User $user)
    {
        return view('users.edit', ['user' => $user]);
    }
    public function update(User $user, Request $request)
    {
        $data = $request->validate([
            'username' => 'required',
            'email' => 'required',
            'gender' => 'nullable',
            'birthday' => 'nullable',
        ]);
        $user->update($data);

        return redirect(route('users.index'))->with('success','User updated');
    }
    public function delete(User $user)
    {
        $user->delete();
        return redirect(route('users.index'))->with('success','User deleted');
    }
}
