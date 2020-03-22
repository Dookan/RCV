<?php

namespace App\Http\Controllers\Auth;

use App\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;


class AdminRegisterController extends Controller
{
	public function showRegistrationForm()
	{
		return view('auth.admin-register');
	}

	public function register(Request $request)
	{
		$this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

		$user = new Admin;
		$user->name = $request->input('name');
		$user->email = $request->input('email');
		$password = Hash::make($request->input('password'));
		$user->password = $password;
		$user->save();

		return redirect('/');
	}
}
