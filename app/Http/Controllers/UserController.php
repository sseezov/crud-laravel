<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        return view('users.index');
    }

    public function create()
    {
        return view('users.create');
    }

    public function add(Request $request): RedirectResponse
    {
        // dd($request);
        $data = $request->validate([
            'username' => 'required',
            'email' => 'required',
            'gender' => 'nullable',
            'birthday' => 'nullable',
        ]);

        $newUser = User::create($data);
        return redirect(route('users.index'));
    }
}
