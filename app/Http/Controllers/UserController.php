<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function sign_in_as(Request $request, User $user)
    {
        Auth::guard('web')->user()->impersonate($user);
        return redirect('/dashboard');
    }

    public function registerPatient(Request $request, User $user)
    {
        $user = User::create([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'middle_name' => $request->input('middle_name'),
            'birth_date' => $request->input('date_of_birth'),
            'gender' => $request->input('gender'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'role_id' => 1,
            'password' => bcrypt($request->input('password')),
        ]);

        return redirect('/dashboard');
    }
}
