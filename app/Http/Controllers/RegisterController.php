<?php

namespace App\Http\Controllers;

use App\Models\User;


class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store()
    {
        // return request()->all();
        $attributes = request()->validate([
            'name' => 'required|min:5|max:255',
            'username' => 'required|min:5|max:255|unique:users,username',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:5',
        ]);


        User::create($attributes);

        return redirect()->route('home');
    }
}
